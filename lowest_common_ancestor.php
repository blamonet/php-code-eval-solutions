<?php

class Node
{
    public $parent = null;
        public $left = null;
        public $right = null;
        public $data = null;
 
        public function __construct($data)
        {
                $this->data = $data;
        }
 
        public function __toString()
        {
                return $this->data;
        }
}
 
class BinaryTree
{
        protected $_root = null;
 
        protected function _insert(&$new, &$node)
        {
                if ($node == null) {
                        $node = $new;
                        return;
                }
 
                if ($new->data <= $node->data) {
                        if ($node->left == null) {
                                $node->left = $new;
                                $new->parent = $node;
                        } else {
                                $this->_insert($new, $node->left);
                        }
                } else {
                        if ($node->right == null) {
                                $node->right = $new;
                                $new->parent = $node;
                        } else {
                                $this->_insert($new, $node->right);
                        }
                }               
        }
 
        protected function _search($target, &$node, $parents)
        {
                if ($target == $node->data) {
                        return $parents;
                } else if ($target > $node->data && isset($node->right)) {
                        array_push($parents, $node->data);
                        return $this->_search($target, $node->right, $parents);
                } else if ($target <= $node->data && isset($node->left)) {
                        array_push($parents, $node->data);
                        return $this->_search($target, $node->left, $parents);
                }
 
                return 0;
        }
 
        public function insert($node)
        {
                $this->_insert($node, $this->_root);
        }
 
        public function search($item) 
        {
                $parents = array();
                return $this->_search($item, $this->_root, $parents);
        }
}

function lewest_common($parents1, $parents2) {
  $arr1 = array_reverse($parents1);
  $arr2 = array_reverse($parents2);
  for ($i = 0; $i <= count($arr1); $i++) {
    for ($j = 0; $j <= count($arr2); $j++) {
       if ($arr1[$i] == $arr2[$j]) {
          return $arr1[$i];
       }
    }
  }
} 
$a = new Node(30);
$b = new Node(52);
$c = new Node(8);
$d = new Node(3);
$e = new Node(20);
$f = new Node(10);
$g = new Node(29);
 
$t = new BinaryTree();
 
$t->insert($a);
$t->insert($b);
$t->insert($c);
$t->insert($d);
$t->insert($e);
$t->insert($f);
$t->insert($g);
 
$fh = fopen($argv[1], "r");
while (!feof($fh)) {
  $test = trim(fgets($fh));
  $node_values = explode(" ", $test);
  if ($node_values[0] != "") {
     $parents1 = $t->search($node_values[0]);
     $parents2 = $t->search($node_values[1]);
     echo lewest_common($parents1, $parents2) . "\n";
  }
//  echo $test;
}
fclose($fh);
?>
