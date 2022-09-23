  const rem_item = document.querySelectorAll("#item");
  rem_item.forEach(item => {
    // item.addEventListener('click', event => {
    //  event.remove();
    console.log(item);
  });

  for(let i = 0; i < rem_item.length; i++) {
    rem_item[i].addEventListener('click', e => {
      rem_item[i].remove();
    });
}
