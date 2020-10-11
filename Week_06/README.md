## 算法学习笔记-Week06

### 分治 - 回溯 - 递归 -> 动态规划
本质：讲一个复杂问题分解成各种子问题，同时寻找其重复性
* 递归模板-复习
```python
def recursion(level,param1,param2,...)
    #recursion terminator 1.递归终结条件
    if level > MAX_LEVEL:
        process_result
        return
    
    #process logic in current lvevl 2.处理当前层逻辑
    process(levle,data...)
    
    #drill down 3.下探到下一层
    self.recursion(level+1,p1,...)

    #reverse the current level status if needed 4.清理当前层

```

* 思维要点
    1. 不要人肉递归（最大误区）
    2. 找到最近最简方法，将其分解成可重复解决的问题（重复子问题）
    3. 数学归纳法思维（抵制人肉递归的诱惑）

### 分治 
是一种特殊的递归，Divide & Conquer & Merge
* 分解成多个子问题
* 找重复性
* 比递归模板增加一步:组合子结果
```python
    result = process_result(subresult1, subresult2, subresult3, ...)
```

### 回溯 - Backtracking
是一种特殊的递归
* 不断在每一层试错
* 八皇后问题

### 动态规划
将一个复杂的问题分解成子问题
* 分治
* 最优子结构（不需要保存中间状态）

## DP-关键点
* 动态规划和递归或者分治没有根本上的区别（关键看有无最优的子结构）
* 共性：找到重复子问题
* 差异性：最优子结构、中途可以淘汰次优解

### 实战例题
## Fibnacci数列、路径计算
* 直接递归为指数级别
* 用数组或LRU Cache缓存降低复杂度
```python
    def fib(n,memo):
        if n <=1:
            return n
        if memp[n]==0:
            memp[n] = fib(n-1) + fib(n-2)
        return memo(n)
```
* Bottom Up写法：
```python
    def fib(n):
        a = [0 for _ in range(n+1)]
        a[0],a[1] = 0,1
        for i in range(2,n+1):
            a[i] = a[i-2] + a[i-1]
        return a[n]
```
* 路径计算：分解为从下或右开始的两个子问题
