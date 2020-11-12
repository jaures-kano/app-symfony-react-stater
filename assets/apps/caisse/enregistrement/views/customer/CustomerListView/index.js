import React, {useState} from 'react';
import {Box, Container, makeStyles} from '@material-ui/core';
import Page from '../../../../../_globals_components/Page';
import Results from './Results';
import Toolbar from './Toolbar';
import data from './data';

const useStyles = makeStyles((theme) => ({
  root: {
    minHeight: '100%',
  },
  container: {
    minWidth: '100%',
    padding: 0,
  }
}));

const CustomerListView = () => {
  const classes = useStyles();
  const [customers] = useState(data);

  return (
      <Page
          className={classes.root}
          title="Customers"
      >
        <Container className={classes.container} maxWidth="xl">
          <Toolbar/>
          <Box mt={3}>
            <Results customers={customers}/>
          </Box>
        </Container>
      </Page>
  );
};

export default CustomerListView;
