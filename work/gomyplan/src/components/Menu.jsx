import { useState } from "react";
import { Link } from "react-router-dom";
import styled from "styled-components";

// img
import IconProfile from "../assets/img/icon_profile.png";
import ModeIcon1 from "../assets/img/icon_darkmode.png";
import ModeIcon2 from "../assets/img/icon_darkmode_on.png";

// style
const MenuContainer = styled.div`
  flex:1;
  display: flex;
  flex-direction: column;
  gap: 40px;
  padding: 0 20px;
`;

const MemberBox = styled.div`
  border-radius: 12px;
  padding: 12px;
  width: 100%;
  box-shadow: inset 0 0 20px 0 rgba(66, 169, 236, 0.3);
  background: var(--color-bg2);
  display: flex;
  flex-direction: column;
  gap: 12px;
  transition: var(--transition);

  .darkMode & {
   box-shadow: none;
    background: var(--color-black);
  }
`;

const MemberTxtbox = styled.div`
  border-bottom: 1px solid var(--color-input);
  padding: 10px 0px;
  width: 100%;
  min-height: 64px;
  transition: var(--transition);

  .darkMode & {
    border-bottom: 1px solid var(--color-border);
  }
`;

const MemberLoginBefore = styled.div`
  width: 100%;
  height: 100%;
  display: flex;
  align-items: center;
  justify-content: center;
  font-family: var(--second-family);
  font-weight: 500;
  font-size: 14px;
  line-height: 130%;
  text-align: center;
  color: var(--color-default);
  transition: var(--transition);

  .darkMode & {
    color: var(--color-input);
  }
`;

const MemberLoginAfter = styled.div`
  width: 100%;
  display: flex;
  align-items: center;
  gap: 10px;
`;

const MemberProfile = styled.div`
  position: relative;
  background: url(${IconProfile}) no-repeat center / contain;
  width: 40px;
  aspect-ratio: 1 / 1;
  display: block;
`;

const MemberInfo = styled.div`
  width: calc(100% - 40px - 10px);
  display: flex;
  flex-direction: column;
`;

const MemberName = styled.div`
  font-family: var(--second-family);
  font-weight: 600;
  font-size: 16px;
  line-height: 130%;
  color: var(--color-default);
  overflow: hidden;
  text-overflow: ellipsis;
  transition: var(--transition);

  .darkMode & {
    color: var(--color-input);
  }
`;

const MbembeerEmail = styled.div`
  font-weight: 400;
  font-size: 12px;
  line-height: 130%;
  color: var(--color-darkgray);
  overflow: hidden;
  text-overflow: ellipsis;
  transition: var(--transition);

  .darkMode & {
    color: var(--color-border);
  }
`;

const MemberBtnBox = styled.div`
  position: relative;
  display: flex;
  flex-direction: column;
  gap: 8px;
`;

const MemberBtn = styled.button`
  position: relative;
  border: 1px solid var(--color-main);
  border-radius: 10px;
  padding: 8px 0px;
  width: 100%;
  height: 32px;
  display: flex;
  align-items: center;
  justify-content: center;
  font-weight: 400;
  font-size: 12px;
  line-height: 130%;
  text-align: center;
  color: var(--color-main);
  transition: var(--transition);

  &.typeA {
    background: var(--color-input);
  }

  &.typeB {
    background: var(--color-main);
    color: var(--color-input);
  }

  .darkMode &.typeA {
    border: 1px solid var(--color-border2);
    background: var(--color-darkgray2);
    color: var(--color-border2);
  }

  .darkMode &.typeB {
    border: 1px solid var(--color-default);
    background: var(--color-default);
    color: var(--color-border2);
  }
`;

const MenuList = styled.div`
  display: flex;
  flex-direction: column;
  border-top: 1px solid rgba(255, 255, 255, 0.5);
  width: 100%;
`;

const MenuItem = styled.div`
  position: relative;
  border-bottom: 1px solid rgba(255, 255, 255, 0.5);
  padding: 12px 10px;
  width: 100%;
  font-weight: 600;
  font-size: 14px;
  line-height: 130%;
  color: var(--color-white);

  a {
    display: block;
  }
`;

const DarkModeBtn = styled.button`
  display: flex;
  align-items: center;
  justify-content: space-between;
  width: 100%;
  font: inherit;
  color: var(--color-white);
`;

const DarkModeIcon = styled.div`
  position: relative;
  width: 25px;
  aspect-ratio: 1 / 1;

  span {
    display: block;
    background: no-repeat center / contain;
    width: 100%;
    height: 100%;
    transition: var(--transition);
  }

  span:nth-child(1) {
    background-image: url(${ModeIcon1});
  }

  span:nth-child(2) {
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translate(-50%, -50%);
    opacity: 0;
    background-image: url(${ModeIcon2});
  }
    
  &.dark-mode span:nth-child(1) {
    opacity:0;
  }

  &.dark-mode span:nth-child(2) {
    opacity:1;
  }
`;

const Menu = () => {
  const [isLoggedIn, setIsLoggedIn] = useState(false);
  const [isDarkMode, setIsDarkMode] = useState(false);

  const handleLogin = () => {
    setIsLoggedIn(true);
  };

  const handleLogout = () => {
    setIsLoggedIn(false);
  };

  const toggleDarkMode = () => {
    const newDarkMode = !isDarkMode;
    setIsDarkMode(newDarkMode);
    document.body.classList.toggle("darkMode", newDarkMode);
  };

  return (
    <MenuContainer>
      <MemberBox>
        <MemberTxtbox>
          {!isLoggedIn ? (
            <MemberLoginBefore>Please log in or sign up.</MemberLoginBefore>
          ) : (
            <MemberLoginAfter>
              <MemberProfile></MemberProfile>
              <MemberInfo>
                <MemberName>GoGoHongKong</MemberName>
                <MbembeerEmail>fraser.song@gomyplan.com</MbembeerEmail>
              </MemberInfo>
            </MemberLoginAfter>
          )}
        </MemberTxtbox>
        {!isLoggedIn ? (
          <MemberBtnBox>
            <MemberBtn className="typeA" onClick={handleLogin}>
              Sign In
            </MemberBtn>
            <MemberBtn className="typeB">Create Account</MemberBtn>
          </MemberBtnBox>
        ) : (
          <MemberBtnBox>
            <MemberBtn className="typeA" onClick={handleLogout}>
              Log Out
            </MemberBtn>
            <MemberBtn className="typeB">Manage Products</MemberBtn>
          </MemberBtnBox>
        )}
      </MemberBox>
      <MenuList>
        <MenuItem>
          <Link to="">My Plans</Link>
        </MenuItem>
        <MenuItem>
          <Link to="">Making a Plan</Link>
        </MenuItem>
        <MenuItem>
          <Link to="">Plans Invited</Link>
        </MenuItem>
        <MenuItem>
          <Link to="">Wishlist</Link>
        </MenuItem>
        <MenuItem>
          <Link to="">Customer Support</Link>
        </MenuItem>
        {isLoggedIn && (
          <>
            <MenuItem>
              <Link to="">Change Member Information</Link>
            </MenuItem>
            <MenuItem>
              <Link to="">Change password</Link>
            </MenuItem>
          </>
        )}
        <MenuItem>
        <DarkModeBtn onClick={toggleDarkMode}>
            <span>Change Display (Dark) </span>
            <DarkModeIcon className={isDarkMode ? "dark-mode" : ""}>
              <span></span>
              <span></span>
            </DarkModeIcon>
          </DarkModeBtn>
        </MenuItem>
      </MenuList>
    </MenuContainer>
  );
};

export default Menu;
