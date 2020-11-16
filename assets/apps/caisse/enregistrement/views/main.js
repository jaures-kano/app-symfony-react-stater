import React, {useState} from 'react';
import {Box, Container, makeStyles} from '@material-ui/core';
import Page from '../../../_globals_components/Page';
import Toolbar from './customer/CustomerListView/Toolbar';
import data from './customer/CustomerListView/data';

const useStyles = makeStyles((theme) => ({
    root: {
        minHeight: '100%',
    },
    container: {
        minWidth: '100%',
        padding: 0,
    }
}));

const ModuleEnregistrement = () => {
    const classes = useStyles();
    const [customers] = useState(data);

    return (
        <Page
            className={classes.root}
            title="Enregistrement">
            <Container className={classes.container} maxWidth="xl">
                <Toolbar/>

                <Box mt={3}>

                </Box>
            </Container>
        </Page>
    );
};

export default ModuleEnregistrement;
