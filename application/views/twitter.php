<script src="http://widgets.twimg.com/j/2/widget.js"></script>
<script>
new TWTR.Widget({
  version: 2,
  type: 'profile',
  rpp: 10,
  interval: 10000,
  width: 230,
  height: 300,
  theme: {
    shell: {
      background: '#ffa200',
      color: '#0000ff'
    },
    tweets: {
      background: '#ffffff',
      color: '#000000',
      links: '#0000ff'
    }
  },
  features: {
    scrollbar: true,
    loop: false,
    live: true,
    hashtags: true,
    timestamp: true,
    avatars: true,
    behavior: 'all'
  }
}).render().setUser('bmfelix').start();
</script>