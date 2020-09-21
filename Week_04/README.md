### 学习笔记
#### 一、 深度优先搜索、广度优先搜索
    1. 要求：
        1. 每个节点都要访问一次
        2. 每个节点仅仅要访问一次
        3. 对于节点的访问顺序不限
            - 深度优先:depth first search
            - 广度优先:breadth first search
##### 1. 深度优先搜索
    1. 递归写法
        ```
            visited = set()
            def dfs(node, visited):
                if node in visited: # terminator
                    # already visited
                    return

                visited.add(node)
                # process current node here.
                ...
                for next_node in node.children(): if not next_node in visited: dfs(next node, visited)  
        ```
    2. 非递归写法
    ```
        def DFS(self, tree):
            if tree.root is None:
            return []
            visited, stack = [], [tree.root]
            while stack:
            node = stack.pop() visited.add(node)
            process (node)
            nodes = generate_related_nodes(node) stack.push(nodes)
                # other processing work
            ...


    ```
##### 2. 广度优先搜索
    1. 递归写法
        ```
        visited = set()
        def dfs(node, visited): visited.add(node)
            # process current node here.
            ...
            for next_node in node.children(): if not next_node in visited: dfs(next node, visited)
        ```
    2. 非递归
        ```
        def BFS(graph, start, end):
            queue = [] queue.append([start]) visited.add(start)
            while queue:
            node = queue.pop() visited.add(node)
            process(node)
            nodes = generate_related_nodes(node) queue.push(nodes)
        ```
#### 二、 贪心算法
1. 贪心算法是一种在每一步选择中都采取在当前状态下最好或最优(即最有 利)的选择，从而希望导致结果是全局最好或最优的算法。
2. 贪心算法与动态规划的不同在于它对每个子问题的解决方案都做出选择，不 能回退。动态规划则会保存以前的运算结果，并根据以前的结果对当前进行 选择，有回退功能。
3. 贪心法可以解决一些最优化问题，如:求图中的最小生成树、求哈夫曼编码 等。然而对于工程和生活中的问题，贪心法一般不能得到我们所要求的答 案。
4. 一旦一个问题可以通过贪心法来解决，那么贪心法一般是解决这个问题的最 好办法。由于贪心法的高效性以及其所求得的答案比较接近最优结果，贪心 法也可以用作辅助算法或者直接解决一些要求结果不特别精确的问题。
5. 例子
    1. 当硬币可选集合固定:Coins = [20, 10, 5, 1] 求最少可以几个硬币拼出总数。 比如 total = 36
6. 反例
    1. 非整除关系的硬币，可选集合:Coins = [10, 9, 1] 求拼出总数为 18 最少需要几个硬币? 选了10以后，只能选8个1了
7. 使用场景
    1. 问题能够分解成子问题来解决，子问题的最优解能递推到最终 问题的最优解。这种子问题最优解称为最优子结构。
#### 二分法
1. 前提：
    1. 目标函数单调性(单调递增或者递减) 
    2. 存在上下界(bounded)
    3. 能够通过索引访问(index accessible)
2. 代码模板
    ```
    left, right = 0, len(array) - 1 while left <= right:
        mid = (left + right) / 2
        if array[mid] == target:
            # find the target!!
            break or return result
        elif array[mid] < target:
            left = mid + 1
        else:
        right = mid - 1
    ```