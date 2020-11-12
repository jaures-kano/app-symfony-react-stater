import React from 'react';
import {Navigate} from 'react-router-dom';
import MainLayout from '../../_globals_components/layouts/index';
import NotFoundView from './views/errors/NotFoundView';
import CustomerListView from "./views/customer/CustomerListView";

const routes = [
  {
    path: '/',
    element: <MainLayout/>,
    children: [
      {path: 'app', element: <CustomerListView/>},
      {path: '404', element: <NotFoundView/>},
      {path: '/', element: <Navigate to="/app"/>},
      {path: '*', element: <Navigate to="/404"/>}
    ]
  }
];

export default routes;
