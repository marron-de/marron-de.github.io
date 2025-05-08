import styled from "styled-components";

// react-bootstrap
import Card from "react-bootstrap/Card";

// component
import Header from "../components/Header";
import Footer from "../components/Footer";
import Nav from "../components/Nav";
import PageContainer from "../components/PageContainer";
import PageContent from "../components/PageContent";
import PageBtnbox from "../components/PageBtnbox";
import CustomCalendar from "../components/CustomCalendar";
import BigButton from "../components/BigButton";

// img
import Profile from "../assets/img/member_profile.png";
import SpotsThum1 from "../assets/img/spots_img1.jpg";
import SpotsThum2 from "../assets/img/spots_img2.jpg";
import SpotsThum3 from "../assets/img/spots_img3.jpg";
import SpotsThum4 from "../assets/img/spots_img4.jpg";

// style
const SpotsContent1 = styled.div`
  padding: 0 20px;
  margin-bottom: 60px;
  display: flex;
  align-items: center;
  flex-direction: column;
  gap: 10px;
`;

const ProfileImg = styled.img`
  border-radius: 10px;
  width: 100px;
  aspect-ratio: 1 / 1;
`;

const ProfileTxtBox = styled.div`
  border: 1px solid var(--color-input);
  border-radius: 10px;
  padding: 20px 20px 24px 20px;
  width: 100%;
  max-width: 300px;
  box-shadow: 0 4px 15px 0 rgba(0, 74, 123, 0.2);
  background: var(--color-white);
  display: flex;
  flex-direction: column;
  gap: 10px;
  transition: var(--transition);

  .darkMode & {
    border: 1px solid var(--color-darkgray);
    background: var(--color-darkgray2);
  }
`;

const ProfileTitle = styled.p`
  font-family: var(--second-family);
  font-weight: 700;
  font-size: 18px;
  line-height: 130%;
  text-align: center;
  color: var(--color-default);
  transition: var(--transition);

  .darkMode & {
    color: var(--color-input);
  }
`;

const ProfileDesc = styled.p`
  font-weight: 400;
  font-size: 14px;
  line-height: 130%;
  text-align: center;
  color: var(--color-darkgray);
  transition: var(--transition);

  .darkMode & {
    color: var(--color-gray);
  }
`;

const SpotsContent2 = styled.div`
  padding: 0 20px;
  margin-bottom: 10px;
`;

const SpotsTitBox = styled.div`
  display: flex;
  flex-direction: column;
  gap: 10px;

  &.cardver {
    gap: 14px;
  }
`;

const SpotsTxtTitle = styled.div`
  font-family: var(--second-family);
  font-weight: 600;
  font-size: 16px;
  line-height: 130%;
  color: var(--color-black);
  display: flex;
  align-items: center;
  justify-content: space-between;
  gap: 10px;
  transition: var(--transition);

  span {
    flex: 1;
  }

  .darkMode & {
    color: var(--color-bg2);
  }
`;

const MemberInfo = () => {
  return (
    <>
      {/* Header */}
      <Header type="logo" />

      {/* contents */}
      <PageContainer>
        <PageContent>
          <SpotsContent1>
            <ProfileImg src={Profile}></ProfileImg>
            <ProfileTxtBox>
              <ProfileTitle>GoGoHongKong</ProfileTitle>
              <ProfileDesc>Hi guys! GoGo Hong Kong will introduce you to many places to visit in Hong Kong!</ProfileDesc>
            </ProfileTxtBox>
          </SpotsContent1>
          <SpotsContent2>
            <SpotsTitBox className="cardver">
              <SpotsTxtTitle>Recommended Plan</SpotsTxtTitle>
              <CustomCalendar />
              <div className="cardList">
                <Card>
                  <Card.Img src={SpotsThum1} />
                  <Card.Body>
                    <div className="card_top">
                      <div className="card_badge">Hong Kong</div>
                    </div>
                    <div className="card_content">
                      <Card.Title>Hong Kong Smart Plan (2 Days 3 Nights)</Card.Title>
                      <Card.Text>Temple Street, Peak Tram, Victoria Peak, Symphony of Lights</Card.Text>
                    </div>
                    <div className="infobox">
                      <div className="left">
                        <BigButton>Details</BigButton>
                      </div>
                      <div className="right">
                        <p className="price_wrap">
                          Per person
                          <span className="price">USD $50</span>
                        </p>
                        <p className="price_desc">*Total up to 4 people*</p>
                      </div>
                    </div>
                  </Card.Body>
                </Card>
                <Card>
                  <Card.Img src={SpotsThum2} />
                  <Card.Body>
                    <div className="card_top">
                      <div className="card_badge">Hong Kong</div>
                    </div>
                    <div className="card_content">
                      <Card.Title>Night Goblin Plan HK</Card.Title>
                      <Card.Text>Victoria Peak, Repulse Bay</Card.Text>
                    </div>
                    <div className="infobox">
                      <div className="left">
                        <BigButton>Details</BigButton>
                      </div>
                      <div className="right">
                        <p className="price_wrap">
                          Per person
                          <span className="price">USD $170</span>
                        </p>
                        <p className="price_desc">*Total up to 1 people*</p>
                      </div>
                    </div>
                  </Card.Body>
                </Card>
                <Card>
                  <Card.Img src={SpotsThum3} />
                  <Card.Body>
                    <div className="card_top">
                      <div className="card_badge">Custom</div>
                    </div>
                    <div className="card_content">
                      <Card.Title>4 Day 3 Night Modern Family Package</Card.Title>
                      <Card.Text>Victoria Peak, Central-Mid-Levels escalator, Repulse Bay</Card.Text>
                    </div>
                    <div className="infobox">
                      <div className="left">
                        <BigButton>Details</BigButton>
                      </div>
                      <div className="right">
                        <p className="price_wrap">
                          Per person
                          <span className="price">USD $50</span>
                        </p>
                        <p className="price_desc">*Total up to 4 people*</p>
                      </div>
                    </div>
                  </Card.Body>
                </Card>
                <Card>
                  <Card.Img src={SpotsThum4} />
                  <Card.Body>
                    <div className="card_top">
                      <div className="card_badge">Custom</div>
                    </div>
                    <div className="card_content">
                      <Card.Title>Hong Kong Macau Bus Tour</Card.Title>
                      <Card.Text>Victoria Peak, Central-Mid-Levels escalator, Repulse Bay</Card.Text>
                    </div>
                    <div className="infobox">
                      <div className="left">
                        <BigButton>Details</BigButton>
                      </div>
                      <div className="right">
                        <p className="price_wrap">
                          Per person
                          <span className="price">USD $100</span>
                        </p>
                        <p className="price_desc">*Total up to 1 people*</p>
                      </div>
                    </div>
                  </Card.Body>
                </Card>
              </div>
            </SpotsTitBox>
          </SpotsContent2>
        </PageContent>
        <PageBtnbox>
          <BigButton>7 Plans (Explore All ➙)</BigButton>
        </PageBtnbox>
      </PageContainer>

      {/* Footer */}
      <Footer />

      {/* Navigation */}
      <Nav />
    </>
  );
};

export default MemberInfo;
