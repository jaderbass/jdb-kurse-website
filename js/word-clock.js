"use strict";
const localStorage = window.localStorage;
let area = ''; // east || west

const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))

function init(){
  
  area = ( localStorage.getItem('lang') !== null ) ? localStorage.getItem('lang') : 'east';
  
  const changeArea = document.querySelector('#changeArea');
  const getSettings = document.querySelector('#clock');
  const settingsArea = document.querySelector('#settings');

  if( area === 'west') {
    changeArea.innerHTML = 'Umschalten auf Ostdeutsch';
    infoMsg.innerHTML = '"westdeutscher"';
  } else {
    changeArea.innerHTML = 'Umschalten auf Westdeutsch';
    infoMsg.innerHTML = '"ostdeutscher"';
  }

  changeArea.addEventListener('click', _ => {
    if( area === 'east') {
      area = 'west';
      changeArea.innerHTML = 'Umschalten auf Ostdeutsch';
      infoMsg.innerHTML = '"westdeutscher"';
    } else {
      area = 'east';
      changeArea.innerHTML = 'Umschalten auf Westdeutsch';
      infoMsg.innerHTML = '"ostdeutscher"';
    }
    localStorage.setItem('lang', area);
    settingsArea.classList.toggle('d-none');
    getTime();
  });

  getSettings.addEventListener('click', _ => {
    settingsArea.classList.toggle('d-none');
  });

  getTime();
}


function getTime() {
  const now = new Date();
  // const now = new Date('2024-10-23T14:04:00');
  const clock = document.querySelector("#clock");
  let m = now.getMinutes();
  let h = now.getHours();

  let s1 = '';
  let s2 = '';
  let s3 = '';
  let s5 = '';
  
  if( (area === "east" && m >= 15) || (area === "west" && m>= 45) ) h++;

  if( m < 5 ) {
    if( area === 'east' ) {
      s1 = 'um ';
    }
    else {
      s1 = '';
      s5 = ' uhr';
    }
  }
  if( ( m >= 5 && m < 10 ) || ( m >= 25 && m < 30 ) || ( m >= 35 && m < 40 ) || ( m >= 55 && m <= 59 ) ) s1 = 'fünf';
  if( ( m >= 10 && m < 25 ) || ( m >= 40 && m < 45 ) || ( m >= 50 && m < 55 ) ) s1 = 'zehn';
  if( ( m >= 5 && m < 15) || ( m >= 35 && m < 45 ) ) s2 = ' nach';
  else if( m > 5 ) s2 = ' vor';
  if( ( m >= 15 && m < 20 ) || ( m >= 45 && m < 50 ) ) {
    if( area === 'east' ) {
      s1 = 'viertel';
      s2 = ' ';
    } else {
      s1  = 'viertel'
      s2 = ' nach ';
    }
  }
  if( m >= 45 && m < 50 ) {
    if( area === 'east' ) {
      s1 = 'dreiviertel';
      s2 = '';
    } else {
      s1 = 'viertel';
      s2 = ' vor';
      h++;
    }
  }
  if( m >= 20 && m < 45 ) {
    s3 = ' halb';
    if( area === 'west' ) h++;
  } 
  if( m >= 30 && m < 35 ) s2 = '';

  if( h > 12 ) h -= 12;
  let s4 = ` ${h}`;

  clock.innerHTML = s1 + s2 + s3 + s4 + s5;

  setTimeout(getTime, 1000);
}

document.addEventListener( "DOMContentLoaded", init );