import { Link } from "react-router-dom";
import styled from "styled-components";

// img
import Logo from "../assets/img/logo.png";

// style
const HWrap = styled.header`
  width: 100%;
  max-width: 600px;
  height: 100px;
  position: sticky;
  margin: 0 auto;
  top: 0;
  z-index: 90;
  transition: var(--transition);
  box-shadow: 0 4px 15px 0 rgba(0, 74, 123, 0.2);
  background: var(--color-white);

  @media only screen and (max-width: 600px) {
    height: 60px;
  }
`;

const HInner = styled.div`
  width: 100%;
  height: 100%;
  display: flex;
  align-items: center;
  justify-content: center;
  padding: 0 40px;

  @media only screen and (max-width: 600px) {
    padding: 0 20px;
  }
`;

const HLogo = styled.div`
  max-width: 260px;

  a {
    width: 100%;
    display: flex;
  }

  a img {
    width: 100%;
  }

  @media only screen and (max-width: 600px) {
    max-width: 145px;
  }
`;

const EmailHeader = () => {
  return (
    <HWrap id="header">
      <HInner>
        <HLogo ><Link to="/"><img src={Logo}/></Link></HLogo>
      </HInner>
    </HWrap>
  );
};

export default EmailHeader;
