import 'react-perfect-scrollbar/dist/css/styles.css';
import React from 'react';
import {useRoutes} from 'react-router-dom';
import {ThemeProvider} from '@material-ui/core';
import GlobalStyles from '../../_globals_components/GlobalStyles';
import theme from '../../_globals_components/theme';
import routes from './routes';

const App = () => {
    const routing = useRoutes(routes);

    return (
        <ThemeProvider theme={theme}>
            <GlobalStyles/>
            {routing}
        </ThemeProvider>
    );
};

export default App;
