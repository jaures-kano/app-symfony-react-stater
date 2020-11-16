import React from 'react';
import {Navigate} from 'react-router-dom';
import MainLayout from '../../_globals_components/layouts/index';
import NotFoundView from '../../_globals_components/layouts/errors/NotFoundView';
import ModuleEnregistrement from "./views/main";

const routes = [
  {
    path: '/',
    element: <MainLayout/>,
    children: [
      {path: 'app', element: <ModuleEnregistrement/>},
      {path: '404', element: <NotFoundView/>},
      {path: '/', element: <Navigate to="/app"/>},
      {path: '*', element: <Navigate to="/404"/>}
    ]
  }
];

export default routes;
