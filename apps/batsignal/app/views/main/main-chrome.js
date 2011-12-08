opus.Gizmo({
	name: "main",
	dropTarget: true,
	type: "Palm.Mojo.Panel",
	h: "100%",
	styles: {
		zIndex: 2,
		opacity: 1,
		bgColor: "black"
	},
	components: [
		{
			name: "location",
			type: "Palm.Mojo.Location"
		},
		{
			name: "gps",
			onSuccess: "gpsSuccess",
			maximumAge: "10",
			type: "Palm.Mojo.Gps"
		},
		{
			name: "webService1",
			url: "http://opendssettings",
			method: "POST",
			parameters: {},
			type: "Palm.Mojo.WebService"
		},
		{
			name: "DeviceTime",
			type: "Palm.Mojo.Time"
		}
	],
	chrome: [
		{
			name: "panel2",
			dropTarget: true,
			type: "Palm.Mojo.Panel",
			l: 0,
			t: 0,
			h: 53,
			controls: [
				{
					name: "Bat Header",
					label: "Bat Signal!",
					type: "Palm.Mojo.Header",
					l: 0,
					t: 0
				}
			]
		},
		{
			name: "panel4",
			dropTarget: true,
			type: "Palm.Mojo.Panel",
			l: 0,
			t: 53,
			h: 194,
			controls: [
				{
					name: "map1",
					zoom: 17,
					type: "Palm.Mojo.Map",
					l: 0,
					t: 127,
					h: 127
				}
			]
		},
		{
			name: "LockActivity",
			ontap: "LockActivityTap",
			disabled: undefined,
			buttonClass: "affirmative",
			label: "Locate & Track",
			type: "Palm.Mojo.ActivityButton",
			l: 0,
			t: 315,
			b: 77
		},
		{
			name: "btnSendForHelp",
			ontap: "btnSendForHelpTap",
			disabled: undefined,
			buttonClass: "negative",
			label: "Send For Help",
			type: "Palm.Mojo.ActivityButton",
			l: 0,
			t: 375
		}
	]
});