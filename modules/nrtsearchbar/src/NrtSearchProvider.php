<?php
/**
 * Copyright since 2007 PrestaShop SA and Contributors
 * PrestaShop is an International Registered Trademark & Property of PrestaShop SA
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/OSL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to https://devdocs.prestashop.com/ for more information.
 *
 * @author    PrestaShop SA and Contributors <contact@prestashop.com>
 * @copyright Since 2007 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/OSL-3.0 Open Software License (OSL 3.0)
 * \src\Adapter\Search\SearchProductSearchProvider.php
 */

namespace AxonVip\Module\Adapter\Search;

use Hook;
use PrestaShop\PrestaShop\Core\Product\Search\ProductSearchContext;
use PrestaShop\PrestaShop\Core\Product\Search\ProductSearchProviderInterface;
use PrestaShop\PrestaShop\Core\Product\Search\ProductSearchQuery;
use PrestaShop\PrestaShop\Core\Product\Search\ProductSearchResult;
use PrestaShop\PrestaShop\Core\Product\Search\SortOrderFactory;
use Search;
use Symfony\Component\Translation\TranslatorInterface;
use Tools;

/**
 * Class responsible of retrieving products in Search page of Front Office.
 *
 * @see SearchController
 */
class NrtSearchProvider implements ProductSearchProviderInterface
{
    /**
     * @var TranslatorInterface
     */
    private $translator;

    /**
     * @var SortOrderFactory
     */
    private $sortOrderFactory;
	
	private $searchCore;

    public function __construct(
        TranslatorInterface $translator,
		$searchCore
    ) {
        $this->translator = $translator;
		$this->searchCore = $searchCore;
        $this->sortOrderFactory = new SortOrderFactory($this->translator);
    }

    /**
     * {@inheritdoc}
     */
    public function runQuery(
        ProductSearchContext $context,
        ProductSearchQuery $query
    ) {
        $products = [];
        $count = 0;

		$queryString = Tools::replaceAccentedChars(urldecode($query->getSearchString()));

		$result = $this->searchCore->find(
			$context->getIdLang(),
			$queryString,
			$query->getPage(),
			$query->getResultsPerPage(),
			$query->getSortOrder()->toLegacyOrderBy(),
			$query->getSortOrder()->toLegacyOrderWay(),
			false, // ajax, what's the link?
			false, // $use_cookie, ignored anyway
			null
		);
		$products = $result['result'];
		$count = $result['total'];

		Hook::exec('actionSearch', [
			'searched_query' => $queryString,
			'total' => $count,

			// deprecated since 1.7.x
			'expr' => $queryString,
		]);
		
        $result = new ProductSearchResult();

        if (!empty($products)) {
            $result
                ->setProducts($products)
                ->setTotalProductsCount($count);

            $result->setAvailableSortOrders(
                $this->sortOrderFactory->getDefaultSortOrders()
            );
        }

        return $result;
    }
}
