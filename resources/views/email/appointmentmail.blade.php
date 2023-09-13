<style>
	body{
		color:black;
	}
	pre, li{
		color:black
	}
</style>
<body>
<pre ><strong>Subject:</strong> Appointment Confirmation</pre>
<pre><strong>Dear</strong> {{ $appointment->name }} ,</pre>

<pre>      Thank you for booking an appointment with our service. We are pleased to confirm your </pre>

<h4>Appointment Details:</h4>
<ul>
	<li>Date: {{ $appointment->dates }}</li>
	<li>Time:{{ $appointment->times }}</li>
	<li>User email :{{ $appointment->email }}</li>
	<li>User name: {{ $appointment->name }}</li>
</ul>




 <pre>     If you have any questions or need to make any changes to your appointment, please feel free to contact us <a href="mailto:bhupeshther5@gmail.com">bhupeshther5.@gmail.com	
</pre>
<p> </p>

<pre>      We look forward to seeing you on {{ $appointment->dates }} at {{ $appointment->times }}. If for any reason, you are unable to make it to your appointment, kindly let us know in advance, so we can reschedule or cancel it. </pre>
<p></p>

<pre>      Thank you once again for choosing our service. We value your trust and are committed to providing you with a great experience.</pre>
<p></p>
<pre>
 Best regards,
Future Health
<a href="mailto:bhupeshther5@gmail.com">bhupeshther5.@gmail.com</p>
<a href="tel:+9197-6763-1826" target="_blank">+9197-6763-1826</p>
	</pre>
</body>