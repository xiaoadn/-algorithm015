<?php 

// 考察：Trie树
class Trie {
    private $tree;
    /**
     * Initialize your data structure here.
     */
    function __construct() {
        $this->tree = new TrieNode();
    }

    /**
     * Inserts a word into the trie.
     * @param String $word
     * @return NULL
     */
    function insert($word) {
        $curNode = $this->tree;
        $n = strlen($word);
        if ($n) {
            for ($i = 0; $i < $n; ++$i) {
                $char = $word[$i];
                if (!isset($curNode->subs[$char])) {
                    $curNode->subs[$char] = new TrieNode($char);
                }
                $curNode = $curNode->subs[$char];
            }

            $curNode->isWord = 1;
        }
    }

    /**
     * Returns if the word is in the trie.
     * @param String $word
     * @return Boolean
     */
    function search($word) {
        $curNode = $this->tree;
        $n = strlen($word);
        if ($n) {
            for ($i = 0; $i < $n; ++$i) {
                $char = $word[$i];
                if (!isset($curNode->subs[$char])) {
                    return false;
                }
                $curNode = $curNode->subs[$char];
            }

            return $curNode->isWord;
        }

        return true;
    }

    /**
     * Returns if there is any word in the trie that starts with the given prefix.
     * @param String $prefix
     * @return Boolean
     */
    function startsWith($prefix) {
        $curNode = $this->tree;
        $n = strlen($prefix);
        if ($n) {
            for ($i = 0; $i < $n; ++$i) {
                $char = $prefix[$i];
                if (!isset($curNode->subs[$char])) {
                    return false;
                }
                $curNode = $curNode->subs[$char];
            }

            return true;
        }

        return true;
    }
}

class TrieNode
{

    public $subs;
    public $isWord;
    public function __construct()
    {
        $this->subs = [];
        $this->isWord = false;
    }
}

/**
 * Your Trie object will be instantiated and called as such:
 * $obj = Trie();
 * $obj->insert($word);
 * $ret_2 = $obj->search($word);
 * $ret_3 = $obj->startsWith($prefix);
 */