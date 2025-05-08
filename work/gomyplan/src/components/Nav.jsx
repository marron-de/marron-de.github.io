import PropTypes from "prop-types";
import styled, { css } from "styled-components";
import { Link } from "react-router-dom";

// img
import NavHome from "../assets/img/nav_home.png";
import NavHomeActive from "../assets/img/nav_home_on.png";
import NavPlans from "../assets/img/nav_plans.png";
import NavPlansActive from "../assets/img/nav_plans_on.png";
import NavCreate from "../assets/img/nav_create.png";
import NavCreateActive from "../assets/img/nav_create_on.png";
import NavWishlist from "../assets/img/nav_wishlist.png";
import NavWishlistActive from "../assets/img/nav_wishlist_on.png";
import NavProfile from "../assets/img/nav_profile.png";
import NavProfileActive from "../assets/img/nav_profile_on.png";

// style
const Nbox = styled.div`
  position: fixed;
  left: 50%;
  bottom: 0;
  transform: translateX(-50%);
  width: 100%;
  max-width: 600px;
  height: 60px;
  border-top: 1px solid var(--color-input);
  padding: 0 20px;
  box-shadow: 0 -4px 15px 0 rgba(0, 74, 123, 0.2);
  background: var(--color-white);
  display: flex;
  justify-content: space-between;
  z-index: 90;
  transition: var(--transition);

  .darkMode & {
    border-top: 1px solid var(--color-gray);
    background: var(--color-darkgray2);
  }

  ${(props) =>
    props.active === "home" &&
    css`
      & > div:nth-child(1) img:nth-child(1) {
        opacity: 0;
      }

      & > div:nth-child(1) img:nth-child(2) {
        opacity: 1;
      }

      & > div:nth-child(1) span {
        color: var(--color-main);
      }
    `}

  ${(props) =>
    props.active === "plans" &&
    css`
      & > div:nth-child(2) img:nth-child(1) {
        opacity: 0;
      }

      & > div:nth-child(2) img:nth-child(2) {
        opacity: 1;
      }

      & > div:nth-child(2) span {
        color: var(--color-main);
      }
    `}

  ${(props) =>
    props.active === "create" &&
    css`
      & > div:nth-child(3) img:nth-child(1) {
        opacity: 0;
      }

      & > div:nth-child(3) img:nth-child(2) {
        opacity: 1;
      }

      & > div:nth-child(3) span {
        color: var(--color-main);
      }
    `}

  ${(props) =>
    props.active === "wishlist" &&
    css`
      & > div:nth-child(4) img:nth-child(1) {
        opacity: 0;
      }

      & > div:nth-child(4) img:nth-child(2) {
        opacity: 1;
      }

      & > div:nth-child(4) span {
        color: var(--color-main);
      }
    `}

  ${(props) =>
    props.active === "profile" &&
    css`
      & > div:nth-child(5) img:nth-child(1) {
        opacity: 0;
      }

      & > div:nth-child(5) img:nth-child(2) {
        opacity: 1;
      }

      & > div:nth-child(5) span {
        color: var(--color-main);
      }
    `}
`;

const Nitem = styled.div`
  width: 36px;
  display: flex;
  align-items: center;
  justify-content: center;

  a {
    display: flex;
    flex-direction: column;
    align-items: center;
  }
`;

const NImg = styled.div`
  position: relative;
  width: 24px;
  aspect-ratio: 1 / 1;
  display: flex;
  align-items: center;
  justify-content: center;

  img {
    width: 100%;
    transition: var(--transition);
  }

  .darkMode & img:nth-child(1) {
    filter: brightness(10);
  }

  img:nth-child(2) {
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translate(-50%, -50%);
    opacity: 0;
    pointer-events: none;
  }
`;

const NTxt = styled.span`
  font-weight: 500;
  font-size: 9px;
  text-transform: uppercase;
  text-align: center;
  color: var(--color-darkgray);
  transition: var(--transition);

  .darkMode & {
  color: var(--color-bg2);
  }
`;

const Nav = ({ active }) => {
  return (
    <Nbox active={active}>
      <Nitem>
        <Link to="/">
          <NImg>
            <img src={NavHome} />
            <img src={NavHomeActive} />
          </NImg>
          <NTxt>home</NTxt>
        </Link>
      </Nitem>
      <Nitem>
        <Link to="/planManager">
          <NImg>
            <img src={NavPlans} />
            <img src={NavPlansActive} />
          </NImg>
          <NTxt>plans</NTxt>
        </Link>
      </Nitem>
      <Nitem>
        <Link to="/createPlan">
          <NImg>
            <img src={NavCreate} />
            <img src={NavCreateActive} />
          </NImg>
          <NTxt>create</NTxt>
        </Link>
      </Nitem>
      <Nitem>
        <Link to="/">
          <NImg>
            <img src={NavWishlist} />
            <img src={NavWishlistActive} />
          </NImg>
          <NTxt>wishlist</NTxt>
        </Link>
      </Nitem>
      <Nitem>
        <Link to="/changeInformation">
          <NImg>
            <img src={NavProfile} />
            <img src={NavProfileActive} />
          </NImg>
          <NTxt>profile</NTxt>
        </Link>
      </Nitem>
    </Nbox>
  );
};

Nav.propTypes = {
  active: PropTypes.string,
};

export default Nav;
