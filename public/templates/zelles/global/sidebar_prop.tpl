<center>
   <table classs="statsbar">
      <tr>
         <td colspan="2"><b><u>Your Stats</u></b></td>
      </tr><tr>
         <td><b>Hashrate</b></td>
         <td class="right">{$GLOBAL.userdata.hashrate|number_format} KH/s</td>
      </tr><tr>
         <td colspan="2"><b><u>Unpaid Shares</u></b> <span id='tt'><img src='{$PATH}/images/questionmark.png' height='15px' width='15px' title='Submitted shares between the last 120 confirms block until now.'></span></td>
      </tr><tr>
         <td><b>Your Valid<b></td>
         <td class="right"><i>{$GLOBAL.userdata.shares.valid|number_format}</i><font size='1px'></font></b></td>
      </tr><tr>
         <td><b>Pool Valid</td>
         <td class="right"><i>{$GLOBAL.roundshares.valid|number_format}</i> <font size='1px'></font></b></td>
      </tr><tr>
         <td colspan="2"><b><u>Round Shares</u></b> <span id='tt'><img src='{$PATH}/images/questionmark.png' height='15px' width='15px' title='Submitted shares since last found block (ie. round shares)'></span></td>
      </tr><tr>
         <td><b>Pool Valid</b></td>
         <td class="right"><i>{$GLOBAL.roundshares.valid|number_format}</i></td>
      </tr><tr>
         <td><b>Pool Invalid</b></td>
         <td class="right"><i>{$GLOBAL.roundshares.invalid|number_format}</i>{if $GLOBAL.roundshares.valid > 0}<font size='1px'> ({($GLOBAL.roundshares.invalid / ($GLOBAL.roundshares.valid + $GLOBAL.roundshares.invalid) * 100)|number_format:"2"}%)</font>{/if}</td>
      </tr><tr>
         <td><b>Your Invalid</b></td>
         <td class="right"><i>{$GLOBAL.userdata.shares.invalid|number_format}</i>{if $GLOBAL.roundshares.valid > 0}<font size='1px'> ({($GLOBAL.userdata.shares.invalid / ($GLOBAL.roundshares.valid + $GLOBAL.roundshares.invalid) * 100)|number_format:"2"}%)</font>{/if}</td>
      </tr><tr>
         <td colspan="2"><b><u>{$GLOBAL.config.currency} Round Estimate</u></b></td>
      </tr><tr>
         <td><b>Block</b></td>
         <td class="right">{$GLOBAL.userdata.est_block|number_format:"8"}</td>
      </tr><tr>
         <td><b>Fees</b></td>
         <td class="right">{$GLOBAL.userdata.est_fee|number_format:"8"}</td>
      </tr><tr>
         <td><b>Donation</b></td>
         <td class="right">{$GLOBAL.userdata.est_donation|number_format:"8"}</td>
      </tr><tr>
         <td><b>Payout</b></td>
         <td class="right">{$GLOBAL.userdata.est_payout|number_format:"8"}</td>
      </tr><tr>
         <td colspan="2">&nbsp;</td>
      </tr><tr>
         <td colspan="2"><b><u>{$GLOBAL.config.currency} Account Balance</u></b></td>
      </tr><tr>
         <td>Confirmed</td>
         <td class="right"><b>{$GLOBAL.userdata.balance.confirmed|default:"0"}</td>
      </tr><tr>
         <td>Unconfirmed</td>
         <td class="right"><b>{$GLOBAL.userdata.balance.unconfirmed|default:"0"}</td>
      </tr>
   </table>
</center>