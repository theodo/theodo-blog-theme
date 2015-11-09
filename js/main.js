//Share Button
if($('share-button').length) {
	new ShareButton({
		ui: { flyout: "bottom left" },
		networks: {
      googlePlus: {
        enabled: true
      },
      twitter: {
        enabled: true
      },
      facebook: {
        enabled: true
      },
      pinterest: {
        enabled: false
      },
      reddit: {
        enabled: true
      },
      linkedin: {
        enabled: true
      },
      whatsapp: {
        enabled:false
      },
      email: {
        enabled: true
  		}
    }
	});
}
