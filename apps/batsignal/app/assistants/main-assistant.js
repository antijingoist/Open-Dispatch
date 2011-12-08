function MainAssistant(argFromPusher) {
}

MainAssistant.prototype = {
	setup: function() {
		Ares.setupSceneAssistant(this);
	},
	cleanup: function() {
		Ares.cleanupSceneAssistant(this);
	},
	btnSendForHelpTap: function(inSender, event) {
		//this.$.webService1.setParameters({coordinate: this.currentLocation});
		this.DataSend = this.currentLocation;
		if (this.DataSend != "") {
			this.$.webService1.setParameters({coordinate: this.DataSend});
			this.$.webService1.execute();
			this.controller.get('btnSendForHelp').mojo.deactivate();
			this.controller.serviceRequest("palm://com.palm.applicationManager",{
				method:"open",
				parameters:{target:"tel://6034997445" }});
		}else{
			this.$.gps.startTracking();
		}
	},
	
	gpsSuccess: function(inSender, inResponse, inRequest) {
		this.$.map1.setLongitude(inResponse.longitude);
		this.$.map1.setLatitude(inResponse.latitude);
		this.currentLocation = inResponse.latitude + "," + inResponse.longitude;
		this.controller.get('LockActivity').mojo.deactivate();
	},
	btnLockLocationTap: function(inSender, event) {
		this.$.gps.startTracking();
	},
	LockActivityTap: function(inSender, event) {
		this.$.gps.startTracking();
	},
	activityButton1Tap: function(inSender, event) {
		
	}
};