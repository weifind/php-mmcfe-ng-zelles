<table class="header">
   <tr>
      <td>
         <span class="headertitle">{$GLOBAL.website.name|default:"The Mining Pool"}</span><br>
         <span class="headerslogan">{$GLOBAL.website.slogan|default:"Patience is a Virtue"}</span>
      </td>
      <td align="right">
         <table class="headercolor">
            <tr>
               {if $GLOBAL.config.price.currency}
                  <td valign="top" style="padding-right: 15px;">
                     <li>{$GLOBAL.config.currency}/{$GLOBAL.config.price.currency}: {$GLOBAL.price|default:"0"|number_format:"4"}</li>
                  </td>
               {/if}
               <td valign="top" style="padding-right: 15px;">
                  <li>Pool Workers: {$GLOBAL.workers|default:"0"}</li>
                  <li>Pool Sharerate: {$GLOBAL.sharerate|number_format:"2"} Shares/s</li>
               </td>
               <td valign="top">
                  <li>Network Hashrate: {($GLOBAL.nethashrate / 1000 / 1000 )|default:"0"|number_format:"3"} MH/s</li>
                  <li>Pool Hashrate: {($GLOBAL.hashrate / 1000)|number_format:"3"} MH/s</li>
               </td>
            </tr>
         </table>
      </td>
   </tr>
</table>