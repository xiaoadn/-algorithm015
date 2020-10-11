#### 字典树和并查集
1. 字典树
    a. 结点本身不存完整单词; 从根结点到某一结点，路径上经过的字符连接起来，为该结点对应的 字符串; 每个结点的所有子结点路径代表的字符都不相同
2. 并查集
    a. 基本操作

        makeSet(s):建立一个新的并查集，其中包含 s 个单元素集合。
        unionSet(x, y):把元素 x 和元素 y 所在的集合合并，要求 x 和 y 所在的集合不相交，如果相交则不合并。
        find(x):找到元素 x 所在的集合的代表，该操作也可以用于判断两个元 素是否位于同一个集合，只要将它们各自的代表比较一下就可以了。
    b. 代码
    ```
    // Java
    class UnionFind { 
        private int count = 0; 
        private int[] parent; 
        public UnionFind(int n) { 
            count = n; 
            parent = new int[n]; 
            for (int i = 0; i < n; i++) { 
                parent[i] = i;
            }
        } 
        public int find(int p) { 
            while (p != parent[p]) { 
                parent[p] = parent[parent[p]]; 
                p = parent[p]; 
            }
            return p; 
        }
        public void union(int p, int q) { 
            int rootP = find(p); 
            int rootQ = find(q); 
            if (rootP == rootQ) return; 
            parent[rootP] = rootQ; 
            count--;
        }
    }
    ```
#### 高级搜索
1. 剪枝
2. 双向BFS
3. 启发式搜索
    1. 启发式函数: h(n)，它用来评价哪些结点最有希望的是一个我们要找的结 点，h(n) 会返回一个非负实数,也可以认为是从结点n的目标结点路径的估 计成本。
    2. 启发式函数是一种告知搜索方向的方法。它提供了一种明智的方法来猜测 哪个邻居结点会导向一个目标。
    3. 估价函数:    h(current_state) = distance(current_state, target_state)