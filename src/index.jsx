import React from 'react';
import ReactDOM from 'react-dom/client';
import App from './App';

document.addEventListener('DOMContentLoaded', function () {
  let element = document.getElementById('wprt-admin-app');
  if (typeof element !== 'undefined' && element !== null) {
    ReactDOM.render(<App />, document.getElementById('wprt-admin-app'));
  }
});
