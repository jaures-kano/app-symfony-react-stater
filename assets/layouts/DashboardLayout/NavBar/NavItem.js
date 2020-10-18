import React, {forwardRef, useState} from 'react';
import { NavLink as RouterLink } from 'react-router-dom';
import clsx from 'clsx';
import {
    Button, Collapse, Drawer, List,
    ListItem,
    makeStyles
} from '@material-ui/core';
import {ExpandLess, ExpandMore} from "@material-ui/icons";
import items from "./Navigations";

const useStyles = makeStyles((theme) => ({
  item: {
    display: 'flex',
    paddingTop: 0,
    paddingBottom: 0
  },
    levelItem: {
        marginLeft: theme.spacing(1)
    },
  button: {
    color: theme.palette.text.secondary,
    fontWeight: theme.typography.fontWeightMedium,
    justifyContent: 'flex-start',
    letterSpacing: 0,
    padding: '10px 8px',
    textTransform: 'none',
    width: '100%'
  },
  icon: {
    marginRight: theme.spacing(1)
  },
    childIcon: {
        marginRight: theme.spacing(1),
        marginLeft: theme.spacing(2)
    },
  title: {
    marginRight: 'auto'
  },
  directIcon: {
    float: 'right'
  },
    iconSpacing: {
      marginRight: theme.spacing(1),
       marginLeft: theme.spacing(2)
    },
  active: {
    backgroundColor: theme.palette.secondary.main,
    color: theme.palette.primary.main,
    '& $title': {
      fontWeight: theme.typography.fontWeightMedium
    },
    '& $icon': {
      color: theme.palette.primary.main
    }
  }
}));

const NavItem = (props) => {
    const [ menu, setMenu ] = useState({});
    const { className, ...rest } = props;
    const classes  = useStyles();

    const handleClick = (item) => {
        let newData = {...menu, [item] : !menu[item]};
        setMenu(newData);
    }

    const handleMenu = ( children, level=0 ) => {

        return children.map(({ children, title , icon : Icon , href }) => {

            if ( !children ) {
                return (
                    <List component="div" disablePadding key={ title }>
                        <ListItem
                            className={clsx(classes.item, className)}
                            disableGutters
                            key={title}
                            {...rest}
                        >
                            <Button
                                activeClassName={classes.active}
                                className={classes.button}
                                component={RouterLink}
                                to={href}
                            >
                                {Icon && (
                                    <Icon
                                        className={classes.icon}
                                        size="20"
                                    />
                                )}
                                <span className={classes.title}>
                                  {title}
                                </span>
                            </Button>
                        </ListItem>
                    </List>
                )
            }
            const levelMenu = level + 1;
            return (
                <div key={ title + level }>
                    <ListItem
                        className={classes.item}
                        disableGutters
                        key={title + level}
                        onClick={() => handleClick(title)}
                    >
                        <Button className={classes.button}>
                            {Icon && (
                                <Icon
                                    className={ level > 1 ? classes.childIcon : classes.icon }
                                    size="20"
                                />
                            )}
                            <span className={classes.title}>
                                  {title}
                            </span>
                            <span className={classes.directIcon}>
                                  { menu[ title ] ? <ExpandLess /> : <ExpandMore />}
                            </span>
                        </Button>
                    </ListItem>
                    <Collapse
                        in={ (menu[title]) ? true : false }
                        timeout="auto"
                        unmountOnExit
                        className={classes.levelItem}
                    >
                        { handleMenu( children, levelMenu) }
                    </Collapse>
                </div>
            )
        })
    }

    return (
        <List {...rest} className={clsx(classes.root, className)} >
            { handleMenu(items) }
        </List>
    )
}


export default NavItem;
