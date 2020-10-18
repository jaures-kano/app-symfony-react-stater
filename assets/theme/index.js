import { createMuiTheme, colors } from '@material-ui/core';
import shadows from './shadows';
import typography from './typography';

const theme = createMuiTheme({
  palette: {
    background: {
      dark: '#eae9e9',
      default: colors.common.white,
      paper: colors.common.white
    },
    primary: {
      main: colors.blue[500]
    },
    secondary: {
      main: colors.blueGrey[100]
    },
    text: {
      primary: colors.blueGrey[900],
      secondary: colors.blueGrey[600]
    }
  },
  shadows,
  typography
});

export default theme;
