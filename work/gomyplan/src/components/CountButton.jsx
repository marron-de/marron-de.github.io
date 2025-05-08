import PropTypes from "prop-types";
import styled, { css } from "styled-components";

// img
import IconHeart from "../assets/img/icon_heart.png";
import IconHeartActive from "../assets/img/icon_heart2.png";
import IconChat from "../assets/img/icon_chat.png";
import IconChatActive from "../assets/img/icon_chat2.png";
import IconShare from "../assets/img/icon_share.png";
import IconShareActive from "../assets/img/icon_share2.png";

// style
const Button = styled.button`
  border: 1px solid var(--color-border);
  border-radius: 100px;
  padding: 5px 10px;
  width: 80px;
  height: 30px;
  background: var(--color-bg2);
  display: flex;
  align-items: center;
  justify-content: space-between;
  cursor: pointer;
  transition: var(--transition);

  &.active {
    border: 1px solid var(--color-default);
    background: var(--color-white);
  }

  &.active .icon span:nth-child(1) {
    opacity: 0;
  }

  &.active .icon span:nth-child(2) {
    opacity: 1;
  }

  .darkMode & {
    border: 1px solid var(--color-darkgray);
    background: var(--color-darkgray2);
  }

  .darkMode &.active {
    border: 1px solid var(--color-border);
    background: var(--color-darkgray2);
  }

  .darkMode &.active span {
    color: var(--color-gray);
  }
`;

const ButtonIcon = styled.div`
  position: relative;
  display: block;
  width: 20px;
  aspect-ratio: 1 / 1;
  transition: var(--transition);

  span {
    display: block;
    background: no-repeat center / contain;
    width: 100%;
    height: 100%;
    transition: var(--transition);
  }

  span:nth-child(2) {
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translate(-50%, -50%);
    opacity: 0;
  }

  ${(props) =>
    props.type === "like" &&
    css`
      span:nth-child(1) {
        background-image: url(${IconHeart});
      }

      span:nth-child(2) {
        background-image: url(${IconHeartActive});
      }
    `}

  ${(props) =>
    props.type === "chat" &&
    css`
      span:nth-child(1) {
        background-image: url(${IconChat});
      }
      span:nth-child(2) {
        background-image: url(${IconChatActive});
      }
    `}

  ${(props) =>
    props.type === "share" &&
    css`
      span:nth-child(1) {
        background-image: url(${IconShare});
      }
      span:nth-child(2) {
        background-image: url(${IconShareActive});
      }
    `}
`;

const ButtonCount = styled.span`
  flex: 1;
  font-family: var(--second-family);
  font-weight: 400;
  font-size: 16px;
  line-height: 1;
  text-align: right;
  color: var(--color-black);
  transition: var(--transition);

  .darkMode & {
    color: var(--color-darkgray);
  }
`;

const CountButton = ({ type, count, active, onClick, ...props }) => {
  const handleInputChange = (event) => {
    if (onClick) {
      onClick(event);
    }
  };

  return (
    <Button className={active} onClick={handleInputChange} {...props}>
      <ButtonIcon className="icon" type={type}>
        <span></span>
        <span></span>
      </ButtonIcon>
      <ButtonCount className="txt">{count}</ButtonCount>
    </Button>
  );
};

CountButton.propTypes = {
  type: PropTypes.string,
  count: PropTypes.string,
  active: PropTypes.string,
  onClick: PropTypes.func,
};

export default CountButton;
