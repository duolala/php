<?php

/* 设置缓存限制为 “private” */

session_cache_limiter('private');
$cache_limiter = session_cache_limiter();

/* 设置缓存过期时间为 30 分钟 */
session_cache_expire(1);
$cache_expire = session_cache_expire();

/* 开始会话 */

session_start();

echo "The cache limiter is now set to $cache_limiter<br />";
echo "The cached session pages expire after $cache_expire minutes";
?>