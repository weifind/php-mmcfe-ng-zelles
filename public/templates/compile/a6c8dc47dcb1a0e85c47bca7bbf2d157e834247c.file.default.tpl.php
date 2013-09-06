<?php /* Smarty version Smarty-3.1.13, created on 2013-09-06 08:30:45
         compiled from ".\templates\zelles\gettingstarted\default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1800452293192ab4516-49933656%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a6c8dc47dcb1a0e85c47bca7bbf2d157e834247c' => 
    array (
      0 => '.\\templates\\zelles\\gettingstarted\\default.tpl',
      1 => 1378456235,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1800452293192ab4516-49933656',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_52293192cd51d5_93280800',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52293192cd51d5_93280800')) {function content_52293192cd51d5_93280800($_smarty_tpl) {?><b>Getting Started</b>
<blockquote>
<ol>
<li><strong>Create account.</strong>
<br>
<ul>
	<li>Register <a href="<?php echo $_SERVER['PHP_SELF'];?>
?page=register">here</a>, or login if you already have account</li>
	<li>Create a <a href="<?php echo $_SERVER['PHP_SELF'];?>
?page=account&action=workers">worker</a> that will be used by the miner to login</li>
</ul>

</li><li><strong>Download a miner.</strong>
	<ul>
	<li><em>Windows users:</em> download a "batteries" included package for
	    <a href="http://www.mediafire.com/?l8i99fbyn41n97a">64-bit</a> or
	    <a href="http://www.mediafire.com/?9nt43ahwpt1sefx">32-bit</a> Windows.
	    These packages include Pooler's cpuminer 2.1.2 and Matoking's GUI r6, updated 2012-02-03.<br>
	    Extract the files into a folder and start the included ScryptMiner.<br>
	    If you don't want a graphical user interface, you can download an optimized command-line miner
	    <a href="https://bitcointalk.org/index.php?topic=55038.msg654850#msg654850">here</a>.</li>
	<li><em>Linux users:</em> download and compile <a href="https://github.com/pooler/cpuminer">cpuminer</a>.
	    Under Debian and Ubuntu, you can use the following recipe:
<pre>  sudo apt-get install make automake build-essential git libcurl4-openssl-dev
  git clone git://github.com/pooler/cpuminer.git
  cd cpuminer
  ./autogen.sh
  ./configure CFLAGS="-O3"
  make
  ./minerd --url http://pool.grewe.ca:8337/ --userpass <em>Weblogin</em>.<em>Worker</em>:<em>Worker password</em>
</pre></li>
	<li><em>Mac OS X users:</em> precompiled binaries are available <a href="https://bitcointalk.org/index.php?topic=55038.msg654850#msg654850">here</a>.</li>
	</ul>
</li>
<li><strong>Configure your miner.</strong>
<br>
Start your miner using the following parameters:
	<table>
	<tbody><tr><td>URL:</td><td><kbd>http://pool.grewe.ca/</kbd></td></tr>
	<tr><td>PORT:</td><td><kbd>8337</kbd></td></tr>
	<tr><td>Username:</td><td><kbd><em>Weblogin</em>.<em>Worker</em></kbd></td></tr>
	<tr><td>Password:</td><td><kbd>Worker Password</kbd></td></tr>
	</tbody></table>
	If you use a command-line miner, type:
<pre>	./minerd --url http://pool.grewe.ca:8337/ --userpass <em>Weblogin</em>.<em>Worker</em>:<em>Worker password</em>
</pre>
	If you want, you can create additional workers with usernames and passwords of your choice <a href="<?php echo $_SERVER['PHP_SELF'];?>
?page=account&action=workers">Here<br></a><br>
</li>
<li><strong>Create a Litecoin address to recieve payments.</strong>
	<ul>
	<li> Downloading the client &amp; block chain: 	Download the Litecoin client from the <a href="http://www.litecoin.org/">official site</a><br>.
	Generate a new address and input it on your account page to receive payments.
	</li>
	<li> Using Instawallet: visit the <a href="http://wallet.it.cx">LTC Instawallet</a> and create a new wallet... keep the link as it is tied to your address/balance essentially your accout<br>
  <i>downloading the client and maintaining your own wallet.dat is always safest</i>


	</li>

	</ul>

	</li><li>Optional (linux): <strong>Keeping miner updated</strong></li>
    <ul>
      <li>Updateting manual:
      <pre>      cd cpuminer
      git pull
      make clean
      ./configure CFLAGS="-O3"
      make
      ./minerd --url http://pool.grewe.ca:8337/ --userpass <em>Weblogin</em>.<em>Worker</em>:<em>Worker Password</em>
      </pre>
      </li>

      </ul>
    <br><br>Thanks alot to <b>Pooler</b> for all his work on the minerd, <a href="https://github.com/pooler/cpuminer">@Github</a> &amp; <a href="https://bitcointalk.org/index.php?action=profile;u=43931">@bitcointalk</a>
    

</ol>

</blockquote><?php }} ?>