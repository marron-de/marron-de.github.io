import PropTypes from "prop-types";
import { Link } from "react-router-dom";
import styled from "styled-components";

// img
import SNS_Facebook from "../assets/img/sns_facebook.png";
import SNS_Twitter from "../assets/img/sns_twitter.png";
import SNS_Instagram from "../assets/img/sns_instagram.png";
import SNS_Youtube from "../assets/img/sns_youtube.png";

// style
const FWrap = styled.footer`
  position: relative;
  width: 100%;
  background: var(--color-default);
  transition: var(--transition);
  margin-bottom: 60px;

  &.modal_ver {
    padding-bottom: 85px;
  }

  .darkMode & {
    background: var(--color-darknavy);
  }
`;

const FInner = styled.div`
  display: flex;
  flex-direction: column;
  gap: 16px;
  padding: 24px 20px;
`;

const FNav = styled.div`
  display: flex;
  align-items: center;
  gap: 10px;

  a {
    font-weight: 500;
    font-size: 12px;
    line-height: 130%;
    text-transform: uppercase;
    color: var(--color-white);
    display: inline-flex;
    align-items: center;
  }

  a::after {
    content: "";
    background: var(--color-border);
    width: 1px;
    height: 10px;
    display: inline-block;
    opacity: 0.8;
    margin-left: 10px;
  }

  a:last-child::after {
    display: none;
  }
`;

const FInfo = styled.div`
  font-weight: 400;
  font-size: 9px;
  line-height: 150%;
  color: var(--color-bg1);
`;

const FSnsBox = styled.div`
  margin-top: 10px;
  display: flex;
  align-items: center;
  gap: 12px;

  a {
    width: 24px;
    aspect-ratio: 1 / 1;
    display: flex;
    align-items: center;
    justify-content: center;
  }

  a img {
    width: 100%;
  }
`;

const Footer = ({ className }) => {
  return (
    <FWrap id="footer" className={className}>
      <FInner>
        <FNav>
          <Link to="#none">About Us</Link>
          <Link to="#none">Support</Link>
          <Link to="#none">Policies</Link>
        </FNav>
        <FInfo>
          상호명 (주)마이리얼트립 | 대표 이동건 | 개인정보보호책임자 정재훈 <br />
          사업자등록번호 209-81-55339 사업자정보확인 <br />
          통신판매업신고번호 2019-서울서초-0260 | 관광사업등록번호 : 제2019-3호 <br />
          주소 서울특별시 서초구 강남대로 311, 드림플러스 강남 18~19층 (서초동, 한화생명보험빌딩 <br />
          이메일 help@myrealtrip.com | 마케팅/제휴문의 marketing@myrealtrip.com <br />
          광고 매체 문의 partnership@myrealtrip.com
          <br />
          <br />
          자사는 서울특별시관광협회 공제영업보증보험에 가입되어 있습니다. <br />
          영업보증보험: 1.5억원 / 기획여행보증: 2억원 <br />
          마이리얼트립은 통신판매중개자이며 통신판매의 당사자가 아닙니다. <br />
          따라서 상품·거래정보 및 거래에 대하여 책임을 지지않습니다. <br />
          부득이한 사정에 의해 확정된 여행일정이 변경되는 경우 여행자의 사전 동의를 받습니다.
        </FInfo>
        <FSnsBox>
          <Link to="https://www.facebook.com/GMP88" target="_blank">
            <img src={SNS_Facebook} />
          </Link>
          <Link to="#none" target="_blank">
            <img src={SNS_Twitter} />
          </Link>
          <Link to="https://www.instagram.com/gomyplan/" target="_blank">
            <img src={SNS_Instagram} />
          </Link>
          <Link to="https://www.youtube.com/@gomyplan" target="_blank">
            <img src={SNS_Youtube} />
          </Link>
        </FSnsBox>
      </FInner>
    </FWrap>
  );
};

Footer.propTypes = {
  className: PropTypes.string,
};

export default Footer;
