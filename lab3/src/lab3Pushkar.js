const handleCarSelect = (car) => {
  const img = document.getElementsByClassName("image")[0];
  img.setAttribute("src", `./img/${car.value.toLowerCase()}.jpg`);
  img.style.width = "";
  img.style.height = "";
  img.style.border = "";
  img.setAttribute("alt", car.value);

}

const handleSetSettings = () => {
  const img = document.getElementsByClassName("image")[0];
  const width = document.getElementsByClassName("width-settings")[0].value + "px";
  const height = document.getElementsByClassName("height-settings")[0].value + "px";
  const altText = document.getElementsByClassName("alt-text")[0].value
  const borderWidth = document.getElementsByClassName("border-width")[0].value + "px";
  const border = `solid ${borderWidth} red`;
  img.style.width = width;
  img.style.height = height;
  img.style.border = border;
  img.setAttribute("alt", altText.toString());
  console.log(width)
  console.log(height)
}
