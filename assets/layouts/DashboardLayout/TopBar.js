import React, { useState } from 'react';
import { Link as RouterLink } from 'react-router-dom';
import clsx from 'clsx';
import PropTypes from 'prop-types';
import {
  AppBar,
  Badge,
  Box,
  IconButton,
  Toolbar,
  makeStyles, Typography
} from '@material-ui/core';
import MenuIcon from '@material-ui/icons/Menu';
import NotificationsIcon from '@material-ui/icons/NotificationsOutlined';
import InputIcon from '@material-ui/icons/Input';
import Logo from './../../components/Logo';

const useStyles = makeStyles(() => ({
  root: {},
  avatar: {
    width: 60,
    height: 60
  }
}));

const TopBar = ({
  className,
  onMobileNavOpen,
  ...rest
}) => {
  const classes = useStyles();
  const [notifications] = useState([]);

  return (
    <AppBar
      className={clsx(classes.root, className)}
      elevation={3}
      {...rest}
    >
      <Toolbar>
        <Box mr={3}>
          <IconButton
              color="inherit"
              mr="20px"
              onClick={onMobileNavOpen}
          >
            <MenuIcon />
          </IconButton>
        </Box>

        <Box mr={1}>
          <RouterLink to="/app/account">
            <Logo />
          </RouterLink>
        </Box>

        <Box>
          <Typography
              color="inherit"
              gutterBottom
              variant="h5"
          >
            HOST CLINIC MANAGMENT
          </Typography>
        </Box>


        <Box flexGrow={1} />

        <IconButton color="inherit">
          <Badge
            badgeContent={notifications.length}
            color="primary"
            variant="dot"
          >
            <NotificationsIcon />
          </Badge>
        </IconButton>
        <IconButton color="inherit">
          <InputIcon />
        </IconButton>

      </Toolbar>
    </AppBar>
  );
};

TopBar.propTypes = {
  className: PropTypes.string,
  onMobileNavOpen: PropTypes.func
};

export default TopBar;
