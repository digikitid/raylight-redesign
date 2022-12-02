<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package example
 */
?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Simple News Ticker Using HTML and CSS</title>
<style>
.ticker-container {
width: 100%;
overflow: hidden;
}
.ticker-wrapper {
width: 100%;
padding-left: 100%;
background-color: transparent;
}
@keyframes ticker {
0% {
transform: translate3d(0, 0, 0);
}
100% {
transform: translate3d(-100%, 0, 0);
}
}
.ticker-transition {
display: inline-block;
white-space: nowrap;
padding-right: 100%;
animation-iteration-count: infinite;
animation-timing-function: linear;
animation-name: ticker;
animation-duration: 20s;
}
.ticker-transition:hover {
animation-play-state: paused;
cursor: pointer;
}
.ticker-item {
display: inline-block;
padding: 0 2rem;
}
</style>
</head>
<body>
<div class="ticker-container">
<div class="ticker-wrapper">
<div class="ticker-transition">
<div class="ticker-item">Item 1.</div>
<div class="ticker-item">Item 2.</div>
<div class="ticker-item">Item 3.</div>
<div class="ticker-item">Item 4.</div>
</div>
</div>
</div>
</body>
</html>