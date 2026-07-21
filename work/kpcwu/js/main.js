// Fullpage
const myFullpage = new fullpage('#fullpage', {
    licenseKey: 'F6F9DF86-F3194384-A1EECDC5-77D3E6B1',
    // anchors: ['intro', 'slogan', 'news', 'media', 'channel', 'footer'],
	scrollingSpeed: 500,
	responsiveWidth: 1081,
	onLeave: function(origin, destination, direction) {
    const originEl = origin.item;

    if (direction === 'down') {
      originEl.classList.add('noscale');
    } else {
      originEl.classList.remove('noscale');
      destination.item.classList.remove('noscale');
    }
  }
});
