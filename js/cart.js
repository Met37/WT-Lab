// function rem() {
//     const element = document.getElementById("item");
//     element.remove();
//   }

// document.querySelectorAll('item').forEach(item => {
//     item.addEventListener('click', event => {
//       event.remove();
//     })
//   })

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

const add_item = document.querySelectorAll("#item");
  add_item.forEach(item => {
    // item.addEventListener('click', event => {
    //  event.remove();
    console.log(item);
  });

  for(let i = 0; i < rem_item.length; i++) {
    rem_item[i].addEventListener('click', e => {
      rem_item[i].add();
    });
}



// var remove = document.getElementsByClassName('remove');
// console.log(remove);

// for (var i = 0; i < remove.length; i++) {
//     remove[i].addEventListener('click', function(){remove[i].remove();});
// }

// function removeCartItem()
// {
//     remove[i].remove();
// }


// if (document.readyState == 'loading') {
//     document.addEventListener('DOMContentLoaded', ready)
// } else {
//     ready()
// }

// function ready() {
//     const removeCartItemButtons = document.getElementsByClassName('remove')
//     for (var i = 0; i < removeCartItemButtons.length; i++) {
//         var button = removeCartItemButtons[i];
//         button.addEventListener('click', removeCartItem)
//     }

// function removeCartItem(event) {
//     removeCartItemButtons.remove();
// }