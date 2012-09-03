$(function() {
	$.gritter.add({
				// (string | mandatory) the heading of the notification
				title: 'Maintenance Notification',
				// (string | mandatory) the text inside the notification
				text: 'We are currently upgrading the Appstorm Network! For the next several hours, the ability to comment on existing posts will be disabled.',
				// (string | optional) the image to display on the left
				image: 'http://miscfiles.s3.amazonaws.com/maintenance.png',
				// (bool | optional) if you want it to fade out on its own or just sit there
				sticky: true,
				// (int | optional) the time you want it to be alive for before fading out
				time: '',
				class_name: 'gritter-light'
			});
});