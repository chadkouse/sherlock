<?php
/**
 * User: Zachary Tong
 * Date: 2013-02-16
 * Time: 09:24 PM
 * Auto-generated by "generate.php"
 * @package Sherlock\components\queries
 */
namespace Sherlock\components\queries;

use Sherlock\components;

// method \Sherlock\components\queries\Match fuzzy_rewrite() fuzzy_rewrite(\string $value) Default: 'constant_score_default'
/**
 * @method \Sherlock\components\queries\Match field() field(\string $value)
 * @method \Sherlock\components\queries\Match query() query(\string $value)
 * @method \Sherlock\components\queries\Match boost() boost(\float $value) Default: 1.0
 * @method \Sherlock\components\queries\Match operator() operator(\string $value) Default: 'and'
 * @method \Sherlock\components\queries\Match analyzer() analyzer(\string $value) Default: 'default'
 * @method \Sherlock\components\queries\Match fuzziness() fuzziness(\float $value) Default: 0.5
 * @method \Sherlock\components\queries\Match lenient() lenient(\bool $value) Default: true
 * @method \Sherlock\components\queries\Match max_expansions() max_expansions(\int $value) Default: 100
 * @method \Sherlock\components\queries\Match minimum_should_match() minimum_should_match(\int $value) Default: 2
 * @method \Sherlock\components\queries\Match prefix_length() prefix_length(\int $value) Default: 2

 */
class Match extends \Sherlock\components\BaseComponent implements \Sherlock\components\QueryInterface
{
    public function __construct($hashMap = null)
    {
        $this->params['boost'] = 1.0;
        $this->params['operator'] = 'and';
        $this->params['analyzer'] = 'default';
        $this->params['fuzziness'] = 0.5;
        //$this->params['fuzzy_rewrite'] = 'constant_score_default';
        $this->params['lenient'] = true;
        $this->params['max_expansions'] = 100;
        $this->params['minimum_should_match'] = 2;
        $this->params['prefix_length'] = 2;

        parent::__construct($hashMap);
    }

    public function toArray()
    {
        $ret = array (
  'match' =>
  array (
    $this->params["field"] =>
    array (
      'query' => $this->params["query"],
      'boost' => $this->params["boost"],
      'operator' => $this->params["operator"],
      'analyzer' => $this->params["analyzer"],
      'fuzziness' => $this->params["fuzziness"],
     // 'fuzzy_rewrite' => $this->params["fuzzy_rewrite"],
      'lenient' => $this->params["lenient"],
      'max_expansions' => $this->params["max_expansions"],
      'minimum_should_match' => $this->params["minimum_should_match"],
      'prefix_length' => $this->params["prefix_length"],
    ),
  ),
);

        return $ret;
    }

}
