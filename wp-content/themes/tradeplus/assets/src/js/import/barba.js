// import barba from '@barba/core';
// import css from '@barba/css';
// import $ from 'jquery';

// const elAnimation = $('.page-transition');

// barba.use(css);
// barba.init({
//   sync: true,
//   transitions: [{
//     before() {
//       elAnimation.addClass('right');
//     },
//     after() {
//       elAnimation.removeClass('right');
//       elAnimation.addClass('left');
//       setTimeout(() => {
//         elAnimation.removeClass('left');
//       }, 1000);
//     },
//     // // afterEnter() {
//     // //   elAnimation.removeClass('left');
//     // // },
//   }]
// });
// // barba.init({
// //   views: [{
// //     namespace: 'index',
// //     beforeLeave(data) {
// //       console.log(data);
      
// //     }
// //   }, {
// //     namespace: 'branch',
// //     beforeEnter(data) {
// //       console.log(data);
      
// //     }
// //   }],
// //   transitions: [{
// //     beforeLeave() {
// //       elAnimation.addClass('right');
// //     },
// //     // enter() {
// //     //   elAnimation.removeClass('right');
// //     //   elAnimation.addClass('left');
// //     // },
// //     // afterEnter() {
// //     //   elAnimation.removeClass('left');
// //     // },
// //   }]
// // });
