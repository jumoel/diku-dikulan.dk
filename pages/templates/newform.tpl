---
title: Nyt blogindlæg
pagetitle: Skriv nyt blogindlæg
parent: simple
sidebar-template: blank
---


<form method="POST" action="/kontrol/ny">
  <table id="blogform">
    <tr>
      <td><input type="text" name="blogtitle" id="blogtitle" /></td>
    </tr>
    <tr>
      <td>
        <div id="wmd-button-bar"></div>
        <br/>
        <textarea id="wmd-input" name ="blogcontent"></textarea>
         <div id="wmd-preview"></div>
      </td>
    </tr>
    <tr>
      <td><button type="submit">Gem indlæg</button></td>
    </tr>
  </table>
</form>

<script type="text/javascript" src="/wmd/wmd.js"></script>

