<b>ThePool Collective</b>
<blockquote>
   <p>After mining in other pools I have decided to setup my own pool, mostly for educational reason. I was curious how pools work, what is needed to get them started and what tools can be used to run them.</p>
   <p>Lots of digging finally revealed that the following tools were required to run a Litecoin pool:</p>
   <ul>
      <li><a href="https://github.com/litecoin-project/litecoin">Litecoin</a>
      <ol><li>Provides litecoind, used to synchronize blocks and offer the API the pool connects to</ol>
      <li><a href="https://github.com/ArtForz/pushpool/tree/tenebrix">Pushpool 0.5.1-tenebrix</a>, a modified version of Pushpool supporting changed target difficulties (2^22 in this pool)</li>
      <ol><li>Provides the API each worker (client miner) authenticates and connects to</ol>
      <li><a href="https://github.com/Greedi/mmcFE">mmcFE</a> modified by Greedi & g2x3k with adjustments for this pool (proper hashrate for 2^22 difficulty)</li>
      <ol><li>The Webinterface merging SQL and API information into a cohesive interface for user and worker management</ol>
   </ul>
   <p>
      The hardest part was finding all the information needed and applying it to a new setup.
      Many tools exist and even those three took a while to get them to work.
      Especially the difficulty adjustment would not have been possible (for me) if it wasn't
      for the pushpool tenebrix branch allowing a custom target bit and reducing difficulty per share.
      More adjustments in the PHP code were necessary to reflect those changes and, at least
      close enough, properly display hashrates on the pool site. It is running well right now but
      please keen in mind that <b>neither the code nor functionaliy are supported</b>.
      I am not responsible for lost coins due to a pool crash or other malfunctions which
      could be caused by by code or the tools used in this implementation.
   </p>
</blockquote>