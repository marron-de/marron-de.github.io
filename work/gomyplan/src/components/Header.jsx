import { useState } from "react";
import PropTypes from "prop-types";
import { useNavigate, Link } from "react-router-dom";
import styled, { css } from "styled-components";

// react-bootstrap
import Offcanvas from "react-bootstrap/Offcanvas";

// component
import Input from "../components/Input";
import LangMenu from "../components/LangMenu";
import Menu from "../components/Menu";

// img
import Logo from "../assets/img/logo.png";
import IconBack from "../assets/img/icon_back.png";
import IconBack2 from "../assets/img/icon_back2.png";
import IconLang from "../assets/img/icon_lang.png";
import IconLang2 from "../assets/img/icon_lang2.png";
import IconLangActive from "../assets/img/icon_lang_on.png";
import IconMenu from "../assets/img/icon_menu.png";
import IconMenu2 from "../assets/img/icon_menu2.png";
import IconMenuActive from "../assets/img/icon_menu_on.png";

// style
const HWrap = styled.header`
  width: 100%;
  max-width: 600px;
  height: 60px;
  position: sticky;
  margin: 0 auto;
  top: 0;
  z-index: 90;
  transition: var(--transition);
  box-shadow: 0 4px 15px 0 rgba(0, 74, 123, 0.2);
  background: var(--color-white);

  ${(props) =>
    props.type === "logo" &&
    css`
      ${HBack}, ${HTitle}, ${HSchbox} {
        display: none;
      }
    `}

  ${(props) =>
    props.type === "title" &&
    css`
      ${HLogo}, ${HSchbox}, ${LangBtn} {
        display: none;
      }
    `}

  ${(props) =>
    props.type === "title2" &&
    css`
      ${HLogo}, ${HSchbox}, ${LangBtn}, ${MenuBtn} {
        display: none;
      }
    `}

  ${(props) =>
    props.type === "search" &&
    css`
      ${HLogo}, ${HTitle}, ${LangBtn}, ${MenuBtn} {
        display: none;
      }
    `}

  .darkMode & {
    background: var(--color-darkgray2);
  }
`;

const HInner = styled.div`
  width: 100%;
  height: 100%;
  display: flex;
  align-items: center;
  justify-content: space-between;
  gap: 10px;
  padding: 0 20px;
`;

const HBack = styled.button`
  background: url(${IconBack}) no-repeat center / contain;
  width: 14px;
  aspect-ratio: 1 / 2.142857;
  transition: var(--transition);

  .darkMode & {
    background-image: url(${IconBack2});
  }

  @media screen and (max-width: 320px) {
    width: 12px;
  }
`;

const HLogo = styled.div`
  max-width: 145px;

  a {
    width: 100%;
    display: flex;
  }

  a img {
    width: 100%;
  }
`;

const HTitle = styled.div`
  font-family: var(--second-family);
  font-weight: 700;
  font-size: 18px;
  line-height: 130%;
  text-align: center;
  color: var(--color-default);
  flex: 1;
  transition: var(--transition);
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;

  .darkMode & {
    color: var(--color-bg1);
  }

  @media screen and (max-width: 320px) {
    font-size: 16px;
  }
`;

const HSchbox = styled.div`
  flex: 1;
  max-width: 260px;
  input {
    padding-top: 7px;
    padding-bottom: 7px;
    height: 34px;
  }
`;

const HSide = styled.div`
  display: flex;
  align-items: center;
  gap: 10px;
  min-width: 28px;
`;

const LangBtn = styled.button`
  background: url(${IconLang}) no-repeat center / contain;
  width: 30px;
  aspect-ratio: 1 / 1;
  transition: var(--transition);

  .darkMode & {
    background-image: url(${IconLang2});
  }

  &.on {
    background-image: url(${IconLangActive});
  }

  &.off {
    background-image: url(${IconLang2});
  }

  @media screen and (max-width: 320px) {
    width: 28px;
  }
`;

const MenuBtn = styled.button`
  background: url(${IconMenu}) no-repeat center / contain;
  width: 30px;
  aspect-ratio: 1 / 1;
  transition: var(--transition);

  .darkMode & {
    background-image: url(${IconMenu2});
  }

  &.on {
    background-image: url(${IconMenuActive});
  }

  &.off {
    background-image: url(${IconMenu2});
  }

  @media screen and (max-width: 320px) {
    width: 28px;
  }
`;

const CanvasTop = styled.div`
  width: 100%;
  height: 60px;
  min-height: 60px;
  border-bottom: 1px solid rgba(255, 255, 255, 0.5);
  padding: 0px 20px;
  display: flex;
  justify-content: flex-end;
  gap: 10px;
`;

const Header = ({ type, title, placeholder, value }) => {
  const [langShow, setLangShow] = useState(false);
  const [menuShow, setMenuShow] = useState(false);

  const LangClose = () => {
    setLangShow(false);
    setMenuShow(false);
  };
  const LangShow = () => {
    setLangShow(true);
    setMenuShow(false);
  };

  const MenuClose = () => {
    setLangShow(false);
    setMenuShow(false);
  };
  const MenuShow = () => {
    setLangShow(false);
    setMenuShow(true);
  };

  const navigate = useNavigate();

  const handleBackButtonClick = () => {
    navigate(-1); // 이전 페이지로 돌아가기
  };

  return (
    <>
      <HWrap id="header" type={type} title={title}>
        <HInner>
          <HBack onClick={handleBackButtonClick}></HBack>
          <HLogo>
            <Link to="/">
              <img src={Logo} />
            </Link>
          </HLogo>
          <HTitle>{title}</HTitle>
          <HSchbox>
            <Input placeholder={placeholder} type="text" icon="search" value={value}></Input>
          </HSchbox>
          <HSide>
            <LangBtn onClick={LangShow}></LangBtn>
            <MenuBtn onClick={MenuShow}></MenuBtn>
          </HSide>
        </HInner>
      </HWrap>

      <Offcanvas show={langShow} onHide={LangClose} placement="end">
        <Offcanvas.Body>
          <CanvasTop>
            <LangBtn onClick={LangClose} className="on"></LangBtn>
            <MenuBtn onClick={MenuShow} className="off"></MenuBtn>
          </CanvasTop>
          <LangMenu />
        </Offcanvas.Body>
      </Offcanvas>

      <Offcanvas show={menuShow} onHide={MenuClose} placement="end">
        <Offcanvas.Body>
          <CanvasTop>
            <LangBtn onClick={LangShow} className="off"></LangBtn>
            <MenuBtn onClick={MenuClose} className="on"></MenuBtn>
          </CanvasTop>
          <Menu />
        </Offcanvas.Body>
      </Offcanvas>
    </>
  );
};

Header.propTypes = {
  type: PropTypes.string,
  title: PropTypes.string,
  placeholder: PropTypes.string,
  value: PropTypes.string,
};

export default Header;
