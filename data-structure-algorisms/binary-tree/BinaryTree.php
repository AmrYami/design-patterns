<?php


namespace BinaryTree;


class BinaryTree
{
    private $root;

    public function __construct($root)
    {
        $this->root = $root;
    }


    public function display()
    {
        $this->display($this->root);
    }

    public function display_proccess($root)
    {
        if ($root == null)
            return;
        echo $root->data;
        echo '<br>';
        $this->display_proccess($root->left);
        $this->display_proccess($root->right);
    }


    public function insert($val)
    {
        $node = $this->root;
        if (!$node) {
            $this->root = new Node($val);
            return $this->root;
        }
        while ($node) {
            if ($val > $node->data) {
                if ($node->right) {
                    $node = $node->right;
                } else {
                    $node = $node->right = new Node($val);
                    break;
                }
            } elseif ($val < $node->data) {
                if ($node->left) {
                    $node = $node->left;
                } else {
                    $node = $node->left = new Node($val);
                    break;
                }
            } else
                break;
        }
        return $node;
    }

}