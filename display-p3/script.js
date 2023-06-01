function color(hex) {
  const hexInt = parseInt(hex, 16);
  const rgb = [0, 0, 0];
  rgb[0] = (hexInt >> 16) & 255;
  rgb[1] = (hexInt >> 8) & 255;
  rgb[2] = hexInt & 255;
  rgb[0] = Math.ceil((rgb[0] / 255) * 1000);
  rgb[1] = Math.ceil((rgb[1] / 255) * 1000);
  rgb[2] = Math.ceil((rgb[2] / 255) * 1000);

  return `color(display-p3 ${rgb[0] / 1000} ${rgb[1] / 1000} ${rgb[2] / 1000})`;
}

console.log(color('FFE500'));
console.log(color('FF9300'));
