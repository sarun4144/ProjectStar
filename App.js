
import './App.css';
import MsgBox from './class-props';

function App() {
  return (
    <MsgBox 
      text= 'React & React Native'
      color = 'blue'
      bgColor = '#ccc'
      fontSize = '18px'
      border = 'solid 1px black'
    />
  );
}

export default App;
