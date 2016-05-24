Configuration
=============

Use the Constant Editor template tool to set these properties. If you are not using the Constant editor to configure the extension, you should analyze carefully the use of these constants in the default setup file.

<table>
<col width="10%" />
<col width="17%" />
<col width="27%" />
<col width="44%" />
<thead>
<tr class="header">
<th align="left">Property</th>
<th align="left">Data type</th>
<th align="left">Description</th>
<th align="left">Default</th>
</tr>
</thead>
<tbody>
<tr class="odd">
<td align="left">General.debug_mode</td>
<td align="left">boolean</td>
<td align="left">Turn on or off debug mode.</td>
<td align="left">0</td>
</tr>
<tr class="even">
<td align="left">Impact.print_to_screen</td>
<td align="left">int</td>
<td align="left">Threshold for showing an impact on the screen</td>
<td align="left">0</td>
</tr>
<tr class="odd">
<td align="left">Impact.file_threshold</td>
<td align="left">int</td>
<td align="left">Threshold for reporting an impact to the logfile defined in Logging.path</td>
<td align="left">0</td>
</tr>
<tr class="even">
<td align="left">Impact.db_threshold</td>
<td align="left">int</td>
<td align="left">Threshold for reporting an impact to the database shown in the PHPIDS backend module</td>
<td align="left">15</td>
</tr>
<tr class="odd">
<td align="left">Impact.email_threshold</td>
<td align="left">int</td>
<td align="left">Threshold for reporting an impact by e-mail specified in Logging.email</td>
<td align="left">20</td>
</tr>
<tr class="even">
<td align="left">Impact.die_threshold</td>
<td align="left">int</td>
<td align="left">Threshold for locking the homepage to the attacker with a session_destroy() and PHP die()</td>
<td align="left">65</td>
</tr>
<tr class="odd">
<td align="left">Impact.die_redirect_pid</td>
<td align="left">string</td>
<td align="left">pid or alias to redirect to after die</td>
<td align="left"></td>
</tr>
<tr class="even">
<td align="left">General.filter_type</td>
<td align="left">string</td>
<td align="left">Choose your filter type.</td>
<td align="left">xml</td>
</tr>
<tr class="odd">
<td align="left">General.use_base_path</td>
<td align="left">boolean</td>
<td align="left">Choose if base path is used.</td>
<td align="left">1</td>
</tr>
<tr class="even">
<td align="left">General.filter_path</td>
<td align="left">string</td>
<td align="left">Choose your filter file.</td>
<td align="left">default_filter.xml</td>
</tr>
<tr class="odd">
<td align="left">General.tmp_path</td>
<td align="left">string</td>
<td align="left">Choose your temp path.</td>
<td align="left">tmp</td>
</tr>
<tr class="even">
<td align="left">General.scan_keys</td>
<td align="left">boolean</td>
<td align="left">Use scan key</td>
<td align="left">0</td>
</tr>
<tr class="odd">
<td align="left">General.HTML_Purifier_Path</td>
<td align="left">string</td>
<td align="left">In case you want to use a different HTMLPurifier source, specify it here. By default, those files are used that are being shipped with PHPIDS</td>
<td align="left">IDS/vendors/htmlpurifier/HTMLPurifier.auto.php</td>
</tr>
<tr class="even">
<td align="left">General.HTML_Purifier_Cache</td>
<td align="left">string</td>
<td align="left">In case you want to use a different HTMLPurifier cache, specify it here. By default, those files are used that are being shipped with PHPIDS</td>
<td align="left">IDS/vendors/htmlpurifier/HTMLPurifier/DefinitionCache/Serializer</td>
</tr>
<tr class="odd">
<td align="left">General.html</td>
<td align="left">string</td>
<td align="left">Define which fields contain html and need preparation before hitting the PHPIDS rules</td>
<td align="left">__wysiwyg</td>
</tr>
<tr class="even">
<td align="left">General.json</td>
<td align="left">string</td>
<td align="left">Define which fields contain JSON data and should be treated as such for fewer false positives</td>
<td align="left">POST.__jsondata</td>
</tr>
<tr class="odd">
<td align="left">General.exceptions_0</td>
<td align="left">string</td>
<td align="left">Define which fields shouldn't be monitored</td>
<td align="left">GET.EXAMPLE1</td>
</tr>
<tr class="even">
<td align="left">General.exceptions_1</td>
<td align="left">string</td>
<td align="left">Define which fields shouldn't be monitored</td>
<td align="left">POST.EXAMPLE2</td>
</tr>
<tr class="odd">
<td align="left">General.exceptions_2</td>
<td align="left">string</td>
<td align="left">Define which fields shouldn't be monitored</td>
<td align="left">COOKIE.__utmz,COOKIE.__utmc,COOKIE.__gads,COOKIE._pk_ref_1_95c0,COOKIE._pk_ref_1_bdaa,/POST.<em>.__hmac/i,/GET.</em>.__hmac/i</td>
</tr>
<tr class="even">
<td align="left">General.min_php_version</td>
<td align="left">string</td>
<td align="left">PHPIDS should run with PHP 5.1.2 but this is untested - set this value to force compatibilty with minor versions</td>
<td align="left">5.1.6</td>
</tr>
<tr class="odd">
<td align="left">General.excludedIPs</td>
<td align="left">string</td>
<td align="left">comma separated list of IPs which are excluded from checking. You can enter IPs like for $TYPO3_CONF_VARS['SYS']['devIPmask'], meaning single IPs, IPs with wildcards and IPs with subnets</td>
<td align="left"></td>
</tr>
<tr class="even">
<td align="left">Logging.email</td>
<td align="left">string</td>
<td align="left">Address for reportings by E-Mail: If not specified the $TYPO3_CONF_VARS['BE'] ['warning_email_addr'] will be used</td>
<td align="left"></td>
</tr>
<tr class="odd">
<td align="left">Logging.path</td>
<td align="left">string</td>
<td align="left">If you use the PHPIDS logger you can define specific configuration here</td>
<td align="left">tmp/phpids_log.txt</td>
</tr>
<tr class="even">
<td align="left">Logging.envelope</td>
<td align="left">string</td>
<td align="left">Email logging: Note that enabling safemode you can prevent spam attempts</td>
<td align="left"></td>
</tr>
<tr class="odd">
<td align="left">Logging.safemode</td>
<td align="left">boolean</td>
<td align="left">Safemode for E-Mail logging.</td>
<td align="left">1</td>
</tr>
<tr class="even">
<td align="left">Logging.urlencode</td>
<td align="left">boolean</td>
<td align="left">urlencode for Email logging</td>
<td align="left">1</td>
</tr>
<tr class="odd">
<td align="left">Logging.allowed_rate</td>
<td align="left">int</td>
<td align="left">Allowed rate for Email logging</td>
<td align="left">15</td>
</tr>
<tr class="even">
<td align="left">Caching.caching</td>
<td align="left">options[session,file,database,memcached,none];</td>
<td align="left">Caching method</td>
<td align="left">file</td>
</tr>
<tr class="odd">
<td align="left">Caching.expiration_time</td>
<td align="left">int</td>
<td align="left">Caching expiration time</td>
<td align="left">600</td>
</tr>
<tr class="even">
<td align="left">Caching.path</td>
<td align="left">string</td>
<td align="left">File caching path</td>
<td align="left">tmp/default_filter.cache</td>
</tr>
</tbody>
</table>

Please refer also to the documentation of PHPIDS found here <http://phpids.org/docs/>.
