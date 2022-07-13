setTimeout(() => {
let magicGrid = new MagicGrid({
  container: '.grid',
  animate: false,
  gutter: 20,
  static: true,
  useMin: true
});

magicGrid.listen();

}, 100);