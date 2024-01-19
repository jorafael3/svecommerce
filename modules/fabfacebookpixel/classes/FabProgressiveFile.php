<?php
/**
* 2017 Manfredi Petruso
*
* NOTICE OF LICENSE
*
* This source file is subject to the Open Software License (OSL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/osl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to manfredi.petruso@fabvla.com so we can send you a copy immediately.
*
*
*  @author    Manfredi Petruso <manfredi.petruso@fabvla.com>
*  @copyright  2017 Manfredi Petruso
*  @license   http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
*/

class FabProgressiveFile
{
    private $fileName = null;
    private $tempFileName = null;
    private $file = null;
    private $lockfile = null;
    private $tmp = false;
    private $updatetime = null;
    const TMP_FILE_SUFFIX = '.tmp';
    const LCK_FILE_SUFFIX = '.lock';
    

    public function __construct($fileName = null)
    {
        if (empty($fileName)) {
            $this->fileName = uniqid();
        } else {
            $this->fileName = $fileName;
        }
        $this->checkLockFile();
        return $this->create();
    }
    
    public function lock()
    {
        try {
            $this->lockfile = fopen($this->getLckName(), 'w');
        } catch (Exception $e) {
            PrestaShopLogger::addLog('lock file cannot be created');
        }
    }
    
    public function unlock()
    {
        try {
            unlink($this->getLckName());
        } catch (Exception $e) {
            PrestaShopLogger::addLog('lock file cannot be deleted');
        }
    }
    
    protected function checkLockFile()
    {
        if (file_exists($this->getTmpName())) {
            $this->updatetime = filemtime($this->getTmpName());
            if (time() - $this->updatetime >10) {
                $this->unlock();
            }
        }
    }
    
    public function create()
    {
        if (!file_exists($this->getTmpName())) {
            try {
                $this->file = fopen($this->getTmpName(), 'w');
            } catch (Exception $e) {
                PrestaShopLogger::addLog('file cannot be opened in write mode');
            }
            $this->tmp = true;
        }
        return $this->file;
    }
    
    
    protected function getLckName()
    {
        return $this->fileName.self::LCK_FILE_SUFFIX;
    }
    
    protected function getTmpName()
    {
        return $this->fileName.self::TMP_FILE_SUFFIX;
    }
    
    public function close()
    {
        if (file_exists($this->getTmpName())) {
            try {
                @fclose($this->file);
                rename($this->getTmpName(), $this->fileName);
                $this->file = fopen($this->fileName, 'r');
            } catch (Exception $e) {
                PrestaShopLogger::addLog('file cannot be opened to be read');
            }
            $this->tmp = false;
            return $this->file;
        } else {
            return false;
        }
    }
    
    public function isTmp()
    {
        return $this->tmp;
    }
    
    protected function dispose()
    {
        try {
            @fclose($this->file);
        } catch (Exception $e) {
            PrestaShopLogger::addLog('file cannot be closed');
        }
    }
    
    public function &getFileStream()
    {
        if (file_exists($this->getTmpName())) {
            try {
                $this->file = fopen($this->getTmpName(), 'rw+');
                fseek($this->file, 0, SEEK_END);
            } catch (Exception $e) {
                PrestaShopLogger::addLog('file cannot be opened');
            }
            $this->tmp = true;
        } else {
             $this->file = fopen($this->fileName, 'w');
        }
        return $this->file;
    }
    
    public function countLines($includeHeaders = false)
    {
        $fileName = $this->fileName;
        $rowcount = 0;

        if ($this->tmp) {
            $fileName = $this->getTmpName();
        }
        try {
            $handle = fopen($fileName, "r");
            while(!feof($handle)){
                $line = fgets($handle);
                $rowcount++;
            }

            fclose($handle);

        } catch (Exception $e) {
            PrestaShopLogger::addLog('file does not exist or cannot be opened');
            return 0;
        }

        if ($rowcount > 1) {
            if (!$includeHeaders) {
                return $rowcount - 2;
            } else {
                return $rowcount - 1;
            }
        }
    }

    public function getLatestProduct()
    {
        $fileName = $this->fileName;
        $data = array();
        $item_group_id_index = 0;
        
        if ($this->tmp) {
            $fileName = $this->getTmpName();
        }
        try {
            $fp = fopen($fileName, 'rb');
            if ($fp) {
                while (!feof($fp)) {
                    $data[] = fgetcsv($fp);
                }
                fclose($fp);
            }
        } catch (Exception $e) {
            PrestaShopLogger::addLog('file does not exist or cannot be opened');
            return 0;
        }

        $item_group_id_index = array_search('item_group_id', $data[0]);
        $item_id_index = array_search('id', $data[0]);
        $data_reverse = array_reverse($data, false);

        
        $i = 0;
        $productId = null;

        while ($i < count($data_reverse)) {
            if (!empty($data_reverse[$i])) {
                if (empty($data_reverse[$i][$item_group_id_index])) {
                    $productId = $data_reverse[$i][$item_id_index];
                } else {
                    $productId = $data_reverse[$i][$item_group_id_index];
                }
                break;
            }
            $i++;
        }
        return $productId;
    }
    
    public function exists()
    {
        return file_exists($this->getTmpName());
    }
    
    public function isLocked()
    {
        return file_exists($this->getLckName());
    }
}
