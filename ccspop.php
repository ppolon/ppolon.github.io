<html>
<head>
<title>
Jonghyun Choi @ ECE UMD
</title>
<LINK media = all href="default2.css" type = text/css rel=StyleSheet>
<!--STYLE type=text/css media=all>img{
    PADDING-RIGHT: 0px; 
	PADDING-LEFT: 0px; 
	PADDING-BOTTOM: 0px; 
	PADDING-TOP: 50px;
	FLOAT: right;
}
</STYLE> 
-->

<body>

<div id="container">

<div class="research_title">
A Complementary Local Feature Descriptor for Face Identification
</div>

<div class="research_author">
Jonghyun Choi, William R. Schwartz, Huimin Guo and Larry S. Davis
</div>
<div class="research_conf">
IEEE Workshop on Applications of Computer Vision 2012
</div>

<div class="research_subtitle">
[ Circular Center Symmetric-Pairs of Pixels (CCS-POP) ]
</div>


<p></p>

<p> 
<b> Abstract </b><br>
In many descriptors, spatial intensity transforms are often packed into a histogram or encoded into binary strings to be insensitive to local misalignment and compact. Discriminative information, however, might be lost during the process as a trade-off. To capture the lost pixel-wise local information, we propose a new feature descriptor, Circular Center Symmetric-Pairs of Pixels (CCS-POP). It concatenates the symmetric pixel differences centered at a pixel position along various orientations with various radii; it is a generalized form of Local Binary Patterns, its variants and Pairs-of-Pixels (POP). Combining CCS-POP with existing descriptors achieves better face identification performance on FRGC Ver. 1.0 and FERET datasets compared to stateof- the-art approaches.
</p>

<h2> Paper </h2>
<p>
<a href="./paper/wacv2012.pdf">[PDF]</a>
</p>


<h2> Code Download </h2> 
<p>
<a href="https://github.com/ppolon/ccspop/tree/master/ccspop_matlab" target="_blank">MATLAB Code</a><br>
<a href="https://github.com/ppolon/ccspop/tree/master/ccspop_mex" target="_blank">CPP-MEX (x64): MATLAB Interface of binary of C++ Implementation for 64 bit Windows</a>
</p>

<h2> Citation </h2>
<h6>
<pre class="bibtex">
@inproceedings{choiSGD12wacv,
	author    = {Jonghyun Choi, William R. Schwartz, Huimin Guo and Larry S. Davis},
	title     = {A Complementary Local Feature Descriptor for Face Identification},
	booktitle = {IEEE Workshop on Applications of Computer Vision (WACV)},
	year      = {2012}
}
</pre>
</h6>

<h2> Contact </h2>
<p>
Bug report or any questions<br>
Send an email to Jonghyun Choi <a href="mailto:jhchoi_[at]_umd_[dot]_edu">jhchoi_[at]_umd_[dot]_edu</a>
</p>


<?php include("footer2.php"); ?>

</body>

</html>
