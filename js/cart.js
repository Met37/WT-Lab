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

const el = document.getQuerySelector("#confirm");
console.log(el);

el.addEventListener("click", pop());


function pop()
{
  alert("Your Order number is -. Thank You for shopping with us!");
}