<?php //Variable declarations for region templates
  $head_title = '<title>The Apache OFBiz&reg; Project - Source Repository</title>';
?>
   
  <!-- page content -->
 <section id="content" class="fullWidth">
    <header class="headerPage">
      <div class="container clearfix">
        <div class="row">
          <h1 class="span8">OFBiz Source Repository</h1>
      <div class="span4" id="navTrail"> <a href="index.html" class="homeLink">home</a><span>/</span><a href="">Community</a><span>/</span><span class="current">Source Repository</span> </div>
        </div>
      </div>
    </header>
  <section id="content" class="features" >
    <div class="slice clearfix">
      <div class="container">
        <div class="row ">
          <aside class="span2 PortfolioStickyMenu" id="sidebar">
            <ul  id="subnav" class="nav nav-stacked sidenav scrollspyNav">
              <li> <a href="#SRepoPublic"> Public Access </a> </li>
           <li> <a href="#SRepoComm"> Committer Access </a> </li>
          </ul>
          </aside>
          <div class="span10">
            <section  id="SRepoPublic" class="slice row clearfix">
              <div class="span10">
                <h2>Public Access</h2>
                <div class="divider"><span></span></div>
    <p>Anyone can checkout or browse the source code in the OFBiz public Subversion (SVN) repository.</P>
    <h3>Browsing the Repository</h3>
                <div class="divider"><span></span></div>
                <p>You can browse the repository using any of the following links.</p>
                <ul class="iconsList">
                   <li><i class="icon-pin"></i> <a href="//svn.apache.org/repos/asf/ofbiz/" target="external"><strong>SVN - WebDAV</strong></a></li>
        <li><i class="icon-pin"></i> <a href="//svn.apache.org/viewvc/ofbiz/" target="external"><strong>SVN - ViewVC</strong></a></li>
    </ul>
    <p></p>
    <p>Our ofbiz-framework trunk and ofbiz-plugins trunk are also available on Git at the links below:</p>
    <ul class="iconsList">
        <li><i class="icon-pin"></i> <a href="//github.com/apache/ofbiz-framework" target="external"><strong>ofbiz-framework trunk on Github</strong></a></li>
       <li><i class="icon-pin"></i> <a href="//github.com/apache/ofbiz-plugins" target="external"><strong>ofbiz-plugins trunk on Github</strong></a></li>
    </ul>

    <h3>Checking out the Repository Source Code</h3>
    <p><strong>NOTE: </strong> Apache OFBiz uses <a href="//subversion.apache.org/" target="external"><strong>Apache Subversion</strong></a> for version control of our source repository. If you are not familiar with Apache Subversion and you don't have an SVN client tool, then following links could be useful:</p>
    <p><i class="icon-pin"></i><a href="//subversion.apache.org/packages.html" target="external"><strong>SVN Client Tools</strong></a></p>
    <p><i class="icon-pin"></i><a href="//subversion.apache.org/docs/" target="external"><strong>SVN Documenentation</strong></a></p>
    <p>To checkout the source code, simply use the following command (if you are using a GUI client, configure it appropriately).</p>
    <h2>Trunk</h2>
     <dl class="iconsList">
        <dt><i class="icon-pin"></i> <strong>ofbiz-framework</strong></dt>
        <dd><code>$ svn co http://svn.apache.org/repos/asf/ofbiz/ofbiz-framework/trunk ofbiz-framework</code></dd>
        <dt><i class="icon-pin"></i> <strong>ofbiz-plugins</strong></dt>
        <dd><code>$ svn co http://svn.apache.org/repos/asf/ofbiz/ofbiz-plugins/trunk ofbiz-plugins </code></dd>
    </dl>
    <h2>Releases</h2>
    <dl class="iconsList">
        <dt><i class="icon-pin"></i> <strong>ofbiz-framework branch release18.12 </strong></dt>
        <dd><code>$ svn co http://svn.apache.org/repos/asf/ofbiz/ofbiz-framework/branches/release18.12 ofbiz.18.12</code></dd>
        <dt><i class="icon-pin"></i> <strong>ofbiz-plugins branch release18.12 </strong></dt>
        <dd><code>$ svn co http://svn.apache.org/repos/asf/ofbiz/ofbiz-plugins/branches/release18.12 ofbiz.18.12-plugins</code></dd>
        <dt><i class="icon-pin"></i> <strong>ofbiz-framework branch release17.12 </strong></dt>
        <dd><code>$ svn co http://svn.apache.org/repos/asf/ofbiz/ofbiz-framework/branches/release17.12 ofbiz.17.12</code></dd>
        <dt><i class="icon-pin"></i> <strong>ofbiz-plugins branch release17.12 </strong></dt>
        <dd><code>$ svn co http://svn.apache.org/repos/asf/ofbiz/ofbiz-plugins/branches/release17.12 ofbiz.17.12-plugins</code></dd>
        <dt><i class="icon-pin"></i> <strong>branch release16.11 (stable)</strong><dt>
        <dd><code>$ svn co http://svn.apache.org/repos/asf/ofbiz/branches/release16.11 ofbiz.16.11</code></dd>
    </dl>
    <h2>Tools</h2>
    <dl class="iconsList">
      <dt><i class="icon-pin"></i> <strong>ofbiz tools</strong></dt>
      <dd><code>$ svn co http://svn.apache.org/repos/asf/ofbiz/tools ofbiz-tools </code></dd>
    </dl>
    <h2>Website</h2>
    <dl class="iconsList">
      <dt><i class="icon-pin"></i> <strong>ofbiz website</strong></dt>
      <dd><code>$ svn co http://svn.apache.org/repos/asf/ofbiz/site ofbiz-website </code></dd>
    </dl>
    </div>
            </section> 

      <section  id="SRepoComm" class="slice row clearfix">
              <div class="span10">
                <h2>Committer Access</h2>
                <div class="divider"><span></span></div>
		    <p>Committer access requires a special account which is provided by the OFBiz adminstrators. If you have a Committer account you can access the repository through HTTPS. When checking in, you will be prompted your userID and password</p>
		    <p>When you first connect you will be prompted to accept the SSL certificate. Verify the certificate is for svn.apache.org. After verification, select option 'P' to permanently add to your SVN configuration.</p>
		    <p>Subversion can handle keyword expansion, eol conversion as well as many other features. These features are configured at the server level (actually only in the OFBiz repository branch), so you don't have to worry about them</p>   
              </div> 
            </section>

          </div>
        </div>
      </div>
    </div>
   </section>
 </section>
  <!-- page content -->
 
