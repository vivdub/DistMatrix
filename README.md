<p># DistMatrix This is a laravel package using Google Distance Matrix Api, to find the time required to travel between destinations. <br /><br /> <strong>Using the package</strong></p>
<ul>
<li>Use&nbsp;name space:&nbsp;<br /><em>use Vivdub\DistMatrix\GMap;<br /><br /></em></li>
<li>Create Object:<br />$gmap = new GMap(env("DIST_MATRIX_API_KEY", ""));<br /><br /></li>
<li>Provide coordinates:<br />$gmap-&gt;timeWithCoordinates(array($source_lat,$source_lon), array(array(dest_lat1, dest_lon1), array(dest_lat2, dest_lon2)));<br /><br /></li>
<li>Get the duration text.<br />$gmap-&gt;getDurationText(0,0);<br />//== First argument is source, since the method created is always using one source coordinate set, so this will always be 0 (for now), other parameter is destination index, in order you provided.</li>
</ul>
<p>&nbsp;</p>
<p>&nbsp;</p>