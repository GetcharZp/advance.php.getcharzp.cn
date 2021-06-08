/**
 * User: GetcharZp
 * Date: 2021/5/14 22:27
 */

// 1-1、使用条件语句分离HTML标签
<?php if (true) {?>
<h1>Test 1</h1>
<?php } else { ?>
<h1>Test 2</h1>
<?php }?>

// 1-2、使用 echo进行HTML标签的输出
<?php
if (true) {
    echo "<h1>Test 1</h1>";
} else {
    echo "<h1>Test 2</h1>";
}
?>

// 2、使用条件语句分离JS语句
<?php if (true) {?>
<script>
    console.log("Test1")
</script>
<?php } else { ?>
<script>
    console.log("Test2")
</script>
<?php }?>