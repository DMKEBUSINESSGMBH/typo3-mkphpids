Configuration
=============

Use the Constant Editor template tool to set these properties. If you
are not using the Constant editor to configure the extension, you should
analyze carefully the use of these constants in the default setup file.

  ------------------------------------------------------------------------
  Propert Data type    Description         Default
  y                                        
  ------- ------------ ------------------- -------------------------------
  General boolean      Turn on or off      0
  .debug\              debug mode.         
  _mode                                    

  Impact. int          Threshold for       0
  print\_              showing an impact   
  to\_scr              on the screen       
  een                                      

  Impact. int          Threshold for       0
  file\_t              reporting an impact 
  hreshol              to the logfile      
  d                    defined in          
                       Logging.path        

  Impact. int          Threshold for       15
  db\_thr              reporting an impact 
  eshold               to the database     
                       shown in the PHPIDS 
                       backend module      

  Impact. int          Threshold for       20
  email\_              reporting an impact 
  thresho              by e-mail specified 
  ld                   in Logging.email    

  Impact. int          Threshold for       65
  die\_th              locking the         
  reshold              homepage to the     
                       attacker with a     
                       session\_destroy()  
                       and PHP die()       

  Impact. string       pid or alias to     
  die\_re              redirect to after   
  direct\              die                 
  _pid                                     

  General string       Choose your filter  xml
  .filter              type.               
  \_type                                   

  General boolean      Choose if base path 1
  .use\_b              is used.            
  ase\_pa                                  
  th                                       

  General string       Choose your filter  default\_filter.xml
  .filter              file.               
  \_path                                   

  General string       Choose your temp    tmp
  .tmp\_p              path.               
  ath                                      

  General boolean      Use scan key        0
  .scan\_                                  
  keys                                     

  General string       In case you want to IDS/vendors/htmlpurifier/HTMLPu
  .HTML\_              use a different     rifier.auto.php
  Purifie              HTMLPurifier        
  r\_Path              source, specify it  
                       here. By default,   
                       those files are     
                       used that are being 
                       shipped with PHPIDS 

  General string       In case you want to IDS/vendors/htmlpurifier/HTMLPu
  .HTML\_              use a different     rifier/DefinitionCache/Serializ
  Purifie              HTMLPurifier cache, er
  r\_Cach              specify it here. By 
  e                    default, those      
                       files are used that 
                       are being shipped   
                       with PHPIDS         

  General string       Define which fields \_\_wysiwyg
  .html                contain html and    
                       need preparation    
                       before hitting the  
                       PHPIDS rules        

  General string       Define which fields POST.\_\_jsondata
  .json                contain JSON data   
                       and should be       
                       treated as such for 
                       fewer false         
                       positives           

  General string       Define which fields GET.EXAMPLE1
  .except              shouldn't be        
  ions\_0              monitored           

  General string       Define which fields POST.EXAMPLE2
  .except              shouldn't be        
  ions\_1              monitored           

  General string       Define which fields COOKIE.\_\_utmz,COOKIE.\_\_utmc
  .except              shouldn't be        ,COOKIE.\_\_gads,COOKIE.\_pk\_r
  ions\_2              monitored           ef\_1\_95c0,COOKIE.\_pk\_ref\_1
                                           \_bdaa,/POST.*.\_\_hmac/i,/GET.
                                           *.\_\_hmac/i

  General string       PHPIDS should run   5.1.6
  .min\_p              with PHP 5.1.2 but  
  hp\_ver              this is untested -  
  sion                 set this value to   
                       force compatibilty  
                       with minor versions 

  General string       comma separated     
  .exclud              list of IPs which   
  edIPs                are excluded from   
                       checking. You can   
                       enter IPs like for  
                       \$TYPO3\_CONF\_VARS 
                       ['SYS']['devIPmask' 
                       ],                  
                       meaning single IPs, 
                       IPs with wildcards  
                       and IPs with        
                       subnets             

  Logging string       Address for         
  .email               reportings by       
                       E-Mail: If not      
                       specified the       
                       \$TYPO3\_CONF\_VARS 
                       ['BE']              
                       ['warning\_email\_a 
                       ddr']               
                       will be used        

  Logging string       If you use the      tmp/phpids\_log.txt
  .path                PHPIDS logger you   
                       can define specific 
                       configuration here  

  Logging string       Email logging: Note 
  .envelo              that enabling       
  pe                   safemode you can    
                       prevent spam        
                       attempts            

  Logging boolean      Safemode for E-Mail 1
  .safemo              logging.            
  de                                       

  Logging boolean      urlencode for Email 1
  .urlenc              logging             
  ode                                      

  Logging int          Allowed rate for    15
  .allowe              Email logging       
  d\_rate                                  

  Caching options[sess Caching method      file
  .cachin ion,file,dat                     
  g       abase,memcac                     
          hed,none];                       

  Caching int          Caching expiration  600
  .expira              time                
  tion\_t                                  
  ime                                      

  Caching string       File caching path   tmp/default\_filter.cache
  .path                                    
  ------------------------------------------------------------------------

Please refer also to the documentation of PHPIDS found here
<http://phpids.org/docs/>.
